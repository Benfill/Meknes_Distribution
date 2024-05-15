<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Endpoints</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">API Endpoints</h1>

        <!-- Endpoint Card -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-4">
            <h2 class="text-xl font-semibold mb-2"><span class="text-green-500">GET</span> /api/users</h2>
            <p class="text-gray-700 mb-2">Retrieve a list of users</p>
            <div class="mb-4">
                <h3 class="font-medium">Headers</h3>
                <ul class="list-disc list-inside ml-4">
                    <li>Authorization: Bearer &lt;token&gt;</li>
                    <li>Content-Type: application/json</li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="font-medium">Parameters</h3>
                <ul class="list-disc list-inside ml-4">
                    <li>page: integer (optional)</li>
                    <li>limit: integer (optional)</li>
                </ul>
            </div>
        </div>

        <!-- Add more endpoint cards as needed -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-4">
            <h2 class="text-xl font-semibold mb-2"><span class="text-yellow-500">POST</span> /api/isConnected</h2>
            <p class="text-gray-700 mb-2">Check user authentication (check if token is valid)</p>
            <div class="mb-4">
                <h3 class="font-medium">Headers</h3>
                <ul class="list-disc list-inside ml-4">
                    <li>Authorization: Bearer &lt;token&gt;</li>
                    <li>Content-Type: application/json</li>
                </ul>
            </div>
        </div>

        <!-- login endpoint -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-4">
            <h2 class="text-xl font-semibold mb-2"><span class="text-yellow-500">POST</span> /api/login</h2>
            <p class="text-gray-700 mb-2">Authenticate a user</p>
            <div class="mb-4">
                <h3 class="font-medium">Headers</h3>
                <ul class="list-disc list-inside ml-4">
                    <li>Content-Type: application/json</li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="font-medium">Parameters</h3>
                <ul class="list-disc list-inside ml-4">
                    <li>email: string (required)</li>
                    <li>password: string (required)</li>
                </ul>
            </div>
        </div>

        <!-- register endpoint -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-4">
            <h2 class="text-xl font-semibold mb-2"><span class="text-yellow-500">POST</span> /api/register</h2>
            <p class="text-gray-700 mb-2">Register a new user</p>
            <div class="mb-4">
                <h3 class="font-medium">Headers</h3>
                <ul class="list-disc list-inside ml-4">
                    <li>Content-Type: application/json</li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="font-medium">Parameters</h3>
                <ul class="list-disc list-inside ml-4">
                    <li>name: string (required)</li>
                    <li>email: string (required)</li>
                    <li>password: string (required)</li>
                </ul>
            </div>
        </div>

    </div>

</body>
</html>
