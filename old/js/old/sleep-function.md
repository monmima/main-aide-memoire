# Sleep Function with setTimeout()

    // sleep function
    function sleep (milliseconds){
      console.log("sleep");
      return new Promise(resolve => setTimeout(resolve, milliseconds))
    }

    async function test () {
      console.log("avant");
      await sleep(1000);
      console.log("après");
    }

    test();