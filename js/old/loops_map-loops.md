# Map loops

The `map()` loop creates a duplicate of the original array.

More info at [mdn web docs](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/map).

Your array of objects:

	const products = [
		{
			id: 0,
			name: 'Product 1'
		},
		{
				id: 1,
				name: 'Product 2'
		}
	];

Your new array created with a map method:

	const productIDs = products.map(function(product) {
		return product.id;
	});

The output
  
	console.log(productIDs); // [0, 1]