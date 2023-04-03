
This is a tutorial to make the laravel project work after cloning it.

you only need to do this once and for the next changes you can just do "git pull".

    1. clone it with git clone <url>
    2. go in the laravel project and copy paste the .env.example and rename the pasted one to just ".env".
    3. open the .env and you see "DB_DATABASE=" put "fakenews", and make an empty database called fakenews.
    4. open terminal inside the laravel project.
    5. type "composer install". If it doesn't work, download composer from the internet.
    6. type "npm install".
    7. type "npm run build".
    8. type php "artisan key:generate".
    9. type "php artisan migrate".
    10. lastly type "php artisan storage:link".
    11. If storage:link command doesn't work, delete the storage folder found in the public folder (/public/storage/)
    11. run php artisan serve.

note: After making a new user, if you change is_admin to 1, you get access to upload posts.

If you get "Path cannot be empty" error then follow the steps below:

    1. Open file explorer.
    2. go to C:\Windows\
    3. there you will see explorer.exe, right click and select "run as admin".
    4. The new opened file explorer is now running with admin priveledges, use that one.
    5. Right-click on the "C:\Windows\temp" directory and select "Properties".
    6. Click on the "Security" tab.
    7. Click on the "Edit" button to modify permissions.
    8. Click on the "Add" button and enter "NETWORK SERVICE" as the object name.
    9. Click on the "Check Names" button to verify that the object name is correct.
    10. Click on the "OK" button to add the "NETWORK SERVICE" account to the list of users and groups.
    11. Select the "NETWORK SERVICE" account from the list of users and groups.
    12. Under "Permissions for NETWORK SERVICE", check the "Full control" checkbox under "Allow".
    13. Click on the "Apply" button to save the changes.

Note that granting full control to the "NETWORK SERVICE" account may not be the most secure option, and you may want to consider limiting the permissions to read, write, and modify as appropriate for your specific use case.