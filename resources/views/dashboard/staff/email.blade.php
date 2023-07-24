<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Email</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body style="background-color:#f8f9fa">
    <section class="admin w-100 flex ">
        <div class="side-nav" style="width:10%">
            @include("dashboard.dashnav.staffsidenav")
        </div>
        <div class="adminSection w-[90%]">
            <div class="">
                @include("includes.navbar")
                <div class="m-3 flex  flex-col items-center">

                    <div class="w-full max-w-xs">
                        <form method="post" class="space-y-8">
                            @csrf
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                    email</label>
                                <input type="email" id="email" name="userEmail"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                    placeholder="name@flowbite.com" required>
                            </div>
                            <div>
                                <label for="subject"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                <input type="text" id="subject" name="subject"
                                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                    placeholder="Let us know how we can help you" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                                    message</label>
                                <textarea id="message" rows="6" name="mailMessage"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Leave a comment..."></textarea>
                            </div>
                            <button type="submit"
                                class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                                message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

</html>