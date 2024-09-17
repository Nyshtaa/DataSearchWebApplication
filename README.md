# DataSearchWebApplication
## Overview
This project is a **Data Search Web Application** designed to allow users to search for specific records in a database and display the results dynamically. The website utilizes **HTML**, **CSS**, **JavaScript**, and **PHP** to provide a responsive and user-friendly interface for searching data entries.

## Key Features
- **Interactive Search:** Users can input queries, and the results are dynamically updated without reloading the page.
- **Data Display:** Search results are displayed in a clean, structured table format, showing essential information.
- **Dynamic Backend:** Powered by PHP to fetch and process data from a MySQL database.

## Technologies Used
- **HTML**: For structuring web pages.
- **CSS**: For styling the interface, ensuring responsiveness and visual appeal.
- **JavaScript**: For adding interactivity and handling AJAX requests to the backend.
- **PHP**: For server-side processing, database interaction, and serving the search results.
- **MySQL**: Database management system for storing and retrieving search data.

## Future Improvements
- **Responsive Design:** Adapts to different screen sizes to provide a consistent user experience across devices.
- **Deployment on Hosting Service:** The website will be deployed on a hosting platform to make it accessible online.
- **Security Enhancements:** Further security measures will be implemented to prevent SQL injection and other vulnerabilities.
- **Advanced Search Options:** Adding filters and sorting mechanisms to enhance search capabilities.
- **User Authentication:** Implementing login and registration features to allow personalized data interaction.

## How It Works
1. The user inputs a query into the search bar.
2. The query is sent to the server using AJAX, where it is processed by PHP.
3. PHP fetches matching records from the MySQL database.
4. The search results are dynamically rendered on the page using JavaScript without reloading.

## Project Structure
index.php  
/css  
style.css  
/js  
script.js  
/backend  
createBD.php  
createTB.php  
insert-tb.php  
alter_table.php  
search.php  

## How to Run the Project Locally

To set up and run the project locally, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/project-name.git
    ```
2. Set up a local server:

- Install and run a local server environment (e.g., XAMPP, WAMP, or MAMP).
- Start Apache and MySQL services.

3. Create the database:

The database will be created via a PHP script. Open your browser and navigate to the following URL:
  ```bash 
     http://localhost/project-name/setup.php
  ```
This script will automatically set up the necessary database structure.

4. Adjust the database connection settings:

Open the config.php or search.php file and adjust the database connection details:
 ```bash
php
$servername = "localhost";
$username = "root";
$password = "nyshtairyna2004";
$dbname = "tax_info";
 ```

5. Launch the site locally:
 After setting up the database, open the index.php file in your browser:
    ```bash
    http://localhost/project-name/index.php
     ```
