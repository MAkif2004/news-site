# news-site
news site template using laravel. Made together with Aaronmensah33, joelkkusi and EmreCop

Take these steps to make it work.

    1. copy paste the .env.example and remate it ".env".
    2. open the .env file and put your database name, username and password.
    3. type "composer install".
    4. type "npm install".
    5. type "npm run build".
    6. type php "artisan key:generate".
    7. type "php artisan migrate".
    8. lastly type "php artisan storage:link". If storage:link command doesn't work, delete the storage folder found in the public folder.
    9. type php artisan serve.

If you get "Path cannot be empty" error on Windows, then follow the steps below:

    1. Open File Explorer with administrator rights.
    2. Right-click on the "C:\Windows\temp" directory and select "Properties".
    3. Click on the "Security" tab.
    4. Click on the "Edit" button to modify permissions.
    5. Click on the "Add" button and enter "NETWORK SERVICE" as the object name.
    6. Click on the "Check Names" button to verify that the object name is correct.
    7. Click on the "OK" button to add the "NETWORK SERVICE" account to the list of users and groups.
    8. Select the "NETWORK SERVICE" account from the list of users and groups.
    9. Under "Permissions for NETWORK SERVICE", check the "Full control" checkbox under "Allow".
    10. Click on the "Apply" button to save the changes.

Note that granting full control to the "NETWORK SERVICE" account may not be the most secure option, and you may want to consider limiting the permissions to read, write, and modify as appropriate for your specific use case.
