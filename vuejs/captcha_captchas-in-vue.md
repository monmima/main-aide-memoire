# Using CAPTCHAS in VueJS 3 + Laravel

1. Install Vue reCAPTCHA-v3. More details about this package can be found on [NPM](https://www.npmjs.com/package/vue-recaptcha-v3).

        npm install vue-recaptcha-v3

1. Go to https://www.google.com/recaptcha/admin/create.
1. Create a label. The label is more for yourself than anything else. It's an arbitrary name that you choose yourself.
1. Select the reCAPTCHA version 3 option.
1. Add these two domain names, assuming you are working **locally**. 
    - 127.0.0.1
    - localhost
1. Copy your site/public key and secret key somewhere or keep your Google tab open.
1. Go to main.ts.
1. Add this import statement:

        import { VueReCaptcha } from 'vue-recaptcha-v3'

1. After the import statements, create an instance of VueReCaptcha like so:

        app.use(VueReCaptcha, { siteKey: 'your-site/public-key-right-here' })

1. Go to Login.vue.
1. Make sure your login function is an async one by adding <code>async</code> in front of it. The start of your login function should look like this. The second and third lines are added as well. Don't take the last line into accound if you don't need to perform.

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
1. Add this to the login() function:

        $credentials = request(['email', 'password', 'token']);//["email" => $request["email"], "password" => $request["password"]];//request(['email', 'password']);
        $body = [
            'response' => $credentials['token'],
            'secret' => 'paste-your-secret-key-here'
        ];
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', $body);
        return response($response, 412);

## Getting more info

More information about this topic can be found here:
- https://developers.google.com/recaptcha/docs/verify
- https://laravel.com/docs/9.x/http-client#making-requests
- https://www.npmjs.com/package/vue-recaptcha-v3
