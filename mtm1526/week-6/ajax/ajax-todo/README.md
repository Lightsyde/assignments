# AJAX to-do list

Goal: create a to-do list using Javascript + AJAX, PHP, and MySQL. The to-do list accepts a new item and allows the user to mark the item as complete. All interactions with PHP and MySQL are completed through AJAX.

- `index.php`—The primary HTML template file that contains the interface and a `<ul>` to hold the to-do items.
- `list.php`—Contains the PHP and SQL necessary to output a list of `<li>` elements to insert into `index.php`.
- `add.php`—A PHP file, called using AJAX, that accepts the new to-do item and adds it to the database.
- `check-off.php`—A PHP file, called using AJAX, that marks a specific item as complete in the database.

## Add to-do item process

*Emphasised steps happen in the background (asynchronously).*

1. In Javascript, wait for user to submit the form.
2. Check that there is a new item in the text field.
3. Add the new to-do `<li>` to the list.
4. Clear the new item form field.
5. *Send a POST request to `add.php` using AJAX. The request includes what the user typed into the form field.*
6. *The PHP in `add.php` validates the item and adds it to the database.*
7. *After adding to the database, PHP returns the newly created ID. We need the ID to allow an item to be checked off.*
8. After the AJAX request has return with the ID, add the ID onto the newly created `<li>`.
	