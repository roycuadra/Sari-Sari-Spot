# Shopping Cart with Checkout using PHP and MySQL



This is a basic implementation of a shopping cart with checkout functionality using PHP and MySQL. The project allows users to add products to their cart, view the cart items and total cost, and proceed to checkout where they can provide their shipping and billing information.

## Requirements

To run this project, you will need to have the following software installed on your system:

- PHP 7 or higher
- MySQL

## Installation

1. Clone this repository to your local machine or web server.
2. Import the `shopping_cart.sql` file into your MySQL database to create the required tables.
3. Update the `config.php` file with your MySQL database credentials.
4. Start your PHP server and navigate to the `index.php` file to begin using the shopping cart.

## Usage

The homepage of the shopping cart displays a list of available products. Users can add products to their cart by clicking the "Add to Cart" button next to the product. The cart icon in the top right corner of the page will display the current number of items in the user's cart.

Users can view their cart at any time by clicking on the cart icon. The cart page displays the list of items in the cart, along with their quantity and cost. Users can update the quantity of each item or remove items from the cart.

To proceed to checkout, users can click the "Checkout" button on the cart page. The checkout page will display a form where users can enter their shipping and billing information. Once the form is submitted, the user's order will be stored in the database and the cart will be emptied.

## Credits

This project was created by Roy Cuadra. 

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
