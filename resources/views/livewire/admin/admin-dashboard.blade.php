<div class="space-y-6">

    <h1 class="text-2xl font-bold">Dashboard Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Total Course -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-sm text-gray-500">Total Kursus</h2>
            <p class="text-2xl font-bold">{{ $totalCourses }}</p>
        </div>

        <!-- Total User -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-sm text-gray-500">Total User</h2>
            <p class="text-2xl font-bold">{{ $totalUsers }}</p>
        </div>

    </div>

</div>