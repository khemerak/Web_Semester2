<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f0f4f8] m-2 p-2">
    <?php
    if (isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];
        $gender = $_POST['radioBtnGender'];
        $course = $_POST['course'];
        $reason = $_POST['reason'];
        $date = $_POST['date'];
        $sessions = isset($_POST['chkgroup']) ? implode(", ", $_POST['chkgroup']) : "No session selected";

        echo "
        <div class='bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500 mb-6 animate-fade-in'>
            <div class='flex items-center mb-4'>
                <svg class='w-8 h-8 text-blue-600 mr-3' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 13l4 4L19 7'></path>
                </svg>
                <h2 class='text-xl font-bold text-gray-800'>Request Submitted Successfully!</h2>
            </div>
            <div class='grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700'>
                <p><span class='font-semibold'>Name:</span> $name </p>
                <p><span class='font-semibold'>Gender:</span> " . ucfirst($gender) . " </p>
                <p><span class='font-semibold'>Course:</span> $course </p>
                <p><span class='font-semibold'>Reason:</span> $reason </p>
                <p class='md:col-span-2'><span class='font-semibold'>Sessions:</span> $sessions </p>
                <p class='md:col-span-2'><span class='font-semibold'>Date:</span> " . date('F j, Y', strtotime($date)) . " </p>
            </div>
            <div class='mt-6'>
                <a href='index.php' class='w-full bg-gradient-to-r from-red-300 to-indigo-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transform transition-all duration-300 hover:scale-[1.01] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 inline-block text-center'>
                    Make Another Request
                </a>
            </div>
        </div>";
    } else {
    ?>
    <div class="border-[1px] border-[#232323] p-4 rounded-sm shadow-md w-full max-w-2xl mx-auto">
        <h1 class="text-center font-semibold mb-4">Leave Request Form</h1>

        <form action="" method="post">
            <div class="mb-6">
                <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
                <input type="text" name="name" id="name" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">
            </div>

            <div class="mb-6">
                <label for="course" class="block text-sm font-semibold text-gray-700">Class</label>
                <input type="text" name="course" id="course" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">
            </div>

            <div class="mb-6">
                <label for="gender" class="block text-sm font-semibold text-gray-700">Gender</label>
                <div class="flex space-x-6 mt-2">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="radio" name="radioBtnGender" value="female" required class="form-radio h-5 w-5 text-blue-600 border-2 border-gray-300 checked:border-blue-500 transition-all">
                        <span class="text-gray-700">Female</span>
                    </label>
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="radio" name="radioBtnGender" value="male" required class="form-radio h-5 w-5 text-blue-600 border-2 border-gray-300 checked:border-blue-500 transition-all">
                        <span class="text-gray-700">Male</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <label for="date" class="block text-sm font-semibold text-gray-700">Date</label>
                <input type="date" name="date" id="date" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">
            </div>

            <div class="mb-6">
                <label for="reason" class="block text-sm font-semibold text-gray-700">Reason for Leave</label>
                <input type="text" name="reason" id="reason" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all outline-none">
            </div>

            <div class="mb-6">
                <label for="session" class="block text-sm font-semibold text-gray-700">Session Selection</label>
                <label class="flex items-center space-x-3 p-4 rounded-lg border border-gray-200 hover:border-blue-300 cursor-pointer transition-all">
                    <input type="checkbox" name="chkgroup[]" value="Session 1 (2:00 PM - 3:30 PM)" class="form-checkbox h-5 w-5 text-blue-600 rounded border-2 border-gray-300 checked:border-blue-500 transition-all">
                    <div>
                        <span class="text-gray-700 font-medium">Session 1</span>
                        <p class="text-sm text-gray-500">2:00 PM - 3:30 PM</p>
                    </div>
                </label>
                <label class="flex items-center space-x-3 p-4 rounded-lg border border-gray-200 hover:border-blue-300 cursor-pointer transition-all">
                    <input type="checkbox" name="chkgroup[]" value="Session 2 (3:30 PM - 5:15 PM)" class="form-checkbox h-5 w-5 text-blue-600 rounded border-2 border-gray-300 checked:border-blue-500 transition-all">
                    <div>
                        <span class="text-gray-700 font-medium">Session 2</span>
                        <p class="text-sm text-gray-500">3:30 PM - 5:15 PM</p>
                    </div>
                </label>
            </div>
            <button type="submit" name="btnSubmit" class="w-full bg-gradient-to-r from-red-300 to-indigo-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transform transition-all duration-300 hover:scale-[1.01] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Submit Request
            </button>
        </form>
    </div>
    <?php
    }
    ?>
</body>

</html>