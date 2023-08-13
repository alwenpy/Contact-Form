# Contact_Form

## Contact Form: Data Validation, SQL Table Entry, and Email Notification Process

To run the program, follow the steps below :  
1. Install XAMPP Server: Download the XAMPP server and proceed with the installation.
2. Set Up Files: Create a 'contact' folder and save the downloaded index.html and index.php files inside it.
3. Configure Folder Structure: Navigate to the 'htdocs' folder in the XAMPP directory (C-drive) or you can directly clone it using `git clone https://github.com/alwenpy/Contact-Form.git` 
4. Start Servers: Launch XAMPP, and initiate both Apache and SQL servers. If the SQL server encounters issues starting, access Task Manager, terminate any running MySQL instances, and then restart the SQL server.
5. Access Localhost: Open your preferred web browser and enter "localhost" along with the specified port number from the XAMPP window.
6. Navigate to Contact Form: Click on the 'contact' folder, followed by selecting form.html to access the contact form.
7. SMTP Configuration: Set up SMTP parameters for email sending using the following code:
   ```php
   ini_set("SMTPSecure", "tls");
   ini_set('SMTP', 'smtp.gmail.com');
   ini_set('smtp_port', 587);
   ini_set('sendmail_from', $email);
   ini_set('smtp_ssl', 'tls');
   ```
8. Configure SMTP settings for email sending, including server, port, security, and sender address, programmatically using the provided code. These settings can also be set up in the php.ini file for broader applications.  
9. Launch a new tab and access your localhost server. Then, open the 'home.php' file.
10. Access the 'phpmyadmin' tab and proceed to establish a new database.
11. Inside the newly created database, generate a fresh table named 'contact_form'. This table should comprise the following columns: 'name', 'phone', 'email', 'subject', 'message', 'datetime', and 'ipaddress', in that specific order. Notably, set the 'phone' column to be of type 'bigint' with a length of 20.
12. Modify the database name within the 'action.php' code. Ensure that all column names and other necessary attributes correspond accurately to establish a seamless connection.
13. Complete the form by entering your details and submitting it to observe various outcomes.
14. To inspect the contents of the database table, navigate to the SQL tab. Write a select query and click on the 'GO' button to retrieve the desired information.

