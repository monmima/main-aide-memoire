# Promises

Inspired by a [tutorial by Steve Griffith](https://www.youtube.com/watch?v=SmPouEFKOBg&list=PLyuRouwmQCjngZXVn48vYmPK_1yAF-fLw&index=1).

Their order of apparition in time:

1. callbacks
1. promises
1. async await

Promises are used with asynchronous code, just like callbacks and async await.

fetch() returns a promise. That's why you can use then() with it.

The then() method expects you to pass a function inside of it.

If the then() method is run, that means resolve() was called.

The catch() function is what runs if reject() is called or if a then() block returns an error.

In the example below, all parameters could share the same name.

You call also use Promise.all() if you want to run code only after all promises are resolved, like when you run many API calls.

## Basic example

    let p1 = new Promise((resolve, reject) => {
      let x = 5;

      if (x === 5) {
        resolve(x);
      } else {
        reject(x);
      }
    });

    p1.then((y) => {
      console.log(y);
      return y + 1; // 5
    }).then((w) => {
      console.log(w); // 6  
    }).catch((z) => {
      console.log(`Error. Expected 5 but got ${z} instead.`);
    });