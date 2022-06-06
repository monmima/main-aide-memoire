# Running multiple fetch queries

This info is based on material from [www.pluralsight.com](https://www.pluralsight.com/guides/handling-nested-http-requests-using-the-fetch-api).

**GET** and not **POST** requests below.

    async function getFishAndChips() {
        const fish = await fetch(http://127.0.0.1:8000/testx).then(response => response.json());

        console.log(fish);

        const chips = await fetch(this.chipsApiUrl, chipReqOpts).then(response => response.json());

        console.log(chips);
    }

    getFishAndChips();
