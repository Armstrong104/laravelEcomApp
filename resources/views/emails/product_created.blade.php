<!-- resources/views/emails/product_created.blade.php -->

<p>Hello,</p>

<p>A new product has been created:</p>

<ul>
    <li>Name: {{ $product->name }}</li>
    <li>Price: {{ $product->price }}</li>
    <li>Quantity: {{ $product->quantity }}</li>
</ul>

<p>Thank you!</p>
