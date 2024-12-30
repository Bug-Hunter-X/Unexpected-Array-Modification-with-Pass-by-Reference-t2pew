# PHP Pass-by-Reference Gotcha

This example demonstrates a subtle but potentially problematic aspect of PHP's pass-by-reference mechanism. When a function modifies a variable passed by reference, the changes are reflected in the original variable. This is expected behavior for simple scalar values. However, it can lead to unexpected side effects when dealing with complex data structures like arrays.

The `increment` function intends to increment a numeric value. It works as expected with scalar variables, but when applied to an array element using pass-by-reference, it modifies the original array directly.

This is because when passing an array element by reference, you're passing the *reference* to that specific array element, not a copy.   Therefore, any changes made to the referenced element within the function affect the original array.