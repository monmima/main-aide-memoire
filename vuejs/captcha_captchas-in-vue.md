# Using CAPTCHAS in VueJS 3 + Laravel

I had the help of a coworker to produce this aide-mémoire on CAPTCHAs.

1. Install Vue reCAPTCHA-v3. More details about this package can be found on [NPM](https://www.npmjs.com/package/vue-recaptcha-v3).

        npm install vue-recaptcha-v3

1. Go to https://www.google.com/recaptcha/admin/create.
1. Create a label. The label is more for yourself than anything else. It's an arbitrary name that you pick.
1. Select the reCAPTCHA version 3 option.
1. Add these two domain names, assuming you are working **locally**. 
    - 127.0.0.1
    - localhost
1. Copy your site/public key and secret key somewhere or keep your Google tab open.
1. Go to main.ts.
1. Add this import statement:

        import { VueReCaptcha } from 'vue-recaptcha-v3'

1. After the import statements, create an instance of VueReCaptcha like so:

        app.use(VueReCaptcha, { siteKey: 'paste-your-site/public-key-here' })

1. Go to Login.vue.
1. Make sure your login function is an async one by adding <code>async</code> in front of it. The start of your login function should look like this. The second line is mandatory and the third one is optional. Don't take it into account if you don't need to perform debugging.

        async login () {
          const token = await this.$recaptcha('login')
          console.log(token);

1. The login body of your query should look like this, the idea being that you add a token to the body.

        const loginBody = {
          email: this.email,
          password: this.password,
          token
        };

1. Go to the backend of your project.
1. Go to app/Http/Controllers/AuthController.php.
1. Find your login() function.
1. Your login function should look something like this:

        /**
        * Get a JWT via given credentials.
        *
        * @return \Illuminate\Http\JsonResponse
        */
        public function login()
        {
                // variables
                $credentials = request(['email', 'password', 'token']);

                $body = [
                'response' => $credentials['token'],
                'secret' => env('RECAPTCHA_SECRET_KEY')
                ];
                $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', $body);

                // si utilisateur humain
                if ($response["success"]) {
                // enlève le token de la requête
                unset($credentials['token']);
                
                // identifiant ou mot de passe valide
                if (auth()->attempt($credentials)) {
                        $token = auth()->user()->createToken('tokenApp')->accessToken;
        
                        return response()->json(['token' => $token], 200);

                // identifiant ou mot de passe invalide
                } else {
                        throw new AuthentificationException("Unauthorised", 401);
                }
                }
                // si utilisateur non humain
                else {
                throw new AuthentificationException("NotHuman", 401);
                }

                return $this->respondWithToken($token);
        }

1. You could paste your secret key directly in the code above, but the best practice is to use an environement variable call it like it's done above.
1. Then you need to go to .env (at the root of your Laravel folder) and to add the name of your environment variable like so. The name of the variable is arbitrary, but has to match your auth file (see code above) and your .env file (see code below).

        RECAPTCHA_SECRET_KEY="insert-your-secret-key-here"

## Getting more info

More information about this topic can be found here:
- https://developers.google.com/recaptcha/docs/verify
- https://laravel.com/docs/9.x/http-client#making-requests
- https://www.npmjs.com/package/vue-recaptcha-v3
