<?php
    $dsn = "mysql:host=localhost;dbname=uts";
    $kunci = new PDO($dsn,"root","");

    $sql = "SELECT * FROM event";
    $hasil = $kunci->query($sql);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>event</title>
</head>
<body class="bg-gray-100 p-4 ">
    <div class="flex justify-items-center items-center">
        <div class="max-w-lg bg-white shadow-md rounded-lg p-6">
            <div class="btn bg-green-500"><a href="add_event.php">Tambah Event</a></div>
        </div>
    </div>
    
    <div class="grid grid-cols-3 gap-4">
        <?php while($row = $hasil->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="col-span-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    
    
</body>
</html>