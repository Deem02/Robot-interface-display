# Robot interface

This is a simple PHP script that connects to a MySQL database and retrieves the last stored direction for a robot.

## Features

- Connects to a MySQL database using PHP
- Queries the `robot_directions` table to get the last stored direction
- Displays the last stored direction or a message if no direction is found

## Prerequisites

- MySQL server
- A MySQL database named `robot_control` with a table named `robot_directions` that has two columns: `id` (INT, AUTO_INCREMENT, PRIMARY KEY) and `direction` (VARCHAR)

## Installation

1. Clone the repository or download the `display_direction.php` file.
2. Update the database connection details in the `$servername`, `$username`, `$password`, and `$database` variables.
3. Upload the `display_direction.php` file to your web server.

## Usage

1. Open the `display_direction.php` file in your web browser.
2. The script will connect to the database, retrieve the last stored direction, and display it on the page.

## Example Output

```
Forward
```

or

```
No direction stored in the database yet.
```
