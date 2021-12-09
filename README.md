## Excel Sheet Import part

-   run command: composer require maatwebsite/excel --ignore-platform-reqs
-   inside app.php -> on providers array add:
    Maatwebsite\Excel\ExcelServiceProvider::class,
-   inside app.php -> on aliases array add:
    'Excel' => Maatwebsite\Excel\Facades\Excel::class,
-   run this command: php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
-   run command: php artisan make:Import StudentImport
