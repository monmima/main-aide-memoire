# Type assertion

With this, `customerId` should be a number. If you use `true` here as the value, you'll get an error since the type is not what is expected.

    let cid: any = 1;
    let customerId = <number>cid;

    customerId = 1;

Another way to achieve the same result.

    let cid: any = 1;
    let customerId = cid as number;

    customerId = 1;