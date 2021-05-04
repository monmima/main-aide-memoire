if (process.env.NODE_ENV !== "production") {
    /**
     * This is gonna load all of our environment variables and set them inside of process.env.
     */
    require("dotenv").config();
}

const express = require("express");
const app = express();
const bcrypt = require("bcrypt");
const passport = require("passport");
const flash = require("express-flash");
const session = require("express-session");
/**
 * This will allow us to override our method that we're using. So instead of using POST, we can call this DELETE method here.
 */
const methodOverride = require("method-override");

const initializePassport = require("./passport-config");

initializePassport(
    passport,
    email => users.find(user => user.email === email),
    id => users.find(user => user.id === id)
);

/**
 * Normally, you would use a database instead.
 */
const users = [];

app.set("view-engine", "ejs");

/**
 * This is telling the app that we want to take the forms and we want to able able to access them inside of our req variable inside of our posts methods.
 */
app.use(express.urlencoded({ extended: false }));
app.use(flash());
app.use(session({
    secret: process.env.SESSION_SECRET,
    /**
     * Should we resave our session variables if nothing is changed?
     */
    resave: false,
    /**
     * Do you want to save an empty value in a session if there is no value?
     */
    saveUninitialized: false
}));
/**
 * This is just a session inside of passport which is going to take care of some of the basics for us.
 */
app.use(passport.initialize());
/**
 * To store the variables to be persisted across the entire session our user has.
 */
app.use(passport.session());
app.use(methodOverride("_method"));

app.get("/", checkAuthenticated, (req, res) => {
    res.render("index.ejs", { name: req.user.name });
});

app.get("/login", checkNotAuthenticated, (req, res) => {
    res.render("login.ejs");
});

app.post("/login", checkNotAuthenticated, passport.authenticate("local", {
    successRedirect: "/",
    failureRedirect: "/login",
    /**
     * To show a message 
     */
    failureFlash: true
}));

app.get("/register", checkNotAuthenticated, (req, res) => {
    res.render("register.ejs");
});

app.post("/register", checkNotAuthenticated, async (req, res) => {
    try {
        /**
         * The hashed password in completely safe for you to store in a database.
         */
        const hashedPassword = await bcrypt.hash(req.body.password, 10);
        users.push({
            /**
             * With a database, this would be automatically generated so you wouldn't have to worry about this step.
             */
            id: Date.now().toString(),
            name: req.body.name,
            email: req.body.email,
            password: hashedPassword
        });
        /**
         * So the user can login with the account he's just registered.
         */
        res.redirect("/login");
    } catch {
        /**
         * In case of an error, redirects the user to the /register page.
         */
        res.redirect("/register");
    }
    console.log(users);
});

app.delete("/logout", (req, res) => {
    req.logOut();
    res.redirect("/login");
});

function checkAuthenticated(req, res, next) {
    if (req.isAuthenticated()) {
         return next()
    }

    res.redirect("/login");
}

function checkNotAuthenticated(req, res, next) {
    if (req.isAuthenticated()) {
        return res.redirect("/");
    }

    next();
}

app.listen(3000);