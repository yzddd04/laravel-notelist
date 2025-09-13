<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Note App')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            color: #000000;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px 0;
            border-bottom: 2px solid #000000;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 300;
            letter-spacing: 2px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #000000;
            color: #ffffff;
            text-decoration: none;
            border: 2px solid #000000;
            border-radius: 0;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ffffff;
            color: #000000;
        }

        .btn-secondary {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #000000;
        }

        .btn-secondary:hover {
            background-color: #000000;
            color: #ffffff;
        }

        .btn-danger {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #000000;
        }

        .btn-danger:hover {
            background-color: #000000;
            color: #ffffff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 12px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 2px solid #000000;
            background-color: #ffffff;
            color: #000000;
            font-size: 16px;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: #000000;
        }

        .form-control::placeholder {
            color: #666666;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .note-item {
            background-color: #ffffff;
            border: 2px solid #000000;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            position: relative;
        }

        .note-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .note-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding-right: 280px;
        }

        .note-content {
            margin-bottom: 15px;
            line-height: 1.6;
            padding-right: 0px;
        }

        .note-actions {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            flex-direction: row;
            gap: 8px;
        }

        .note-actions .btn {
            padding: 8px 16px;
            font-size: 12px;
            width: 80px;
            height: 40px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-view {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #000000;
        }

        .btn-view:hover {
            background-color: #000000;
            color: #ffffff;
        }

        .btn-edit {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #000000;
        }

        .btn-edit:hover {
            background-color: #000000;
            color: #ffffff;
        }

        .btn-delete {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #000000;
        }

        .btn-delete:hover {
            background-color: #000000;
            color: #ffffff;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #666666;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: 300;
        }

        .empty-state p {
            font-size: 1rem;
            margin-bottom: 30px;
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #000000;
            color: #ffffff;
            padding: 16px 24px;
            border-radius: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.success {
            background-color: #000000;
            color: #ffffff;
        }

        .toast.error {
            background-color: #000000;
            color: #ffffff;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #000000;
            text-decoration: none;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 12px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .note-title {
                padding-right: 0;
                margin-bottom: 20px;
            }

            .note-content {
                padding-right: 0;
                margin-bottom: 20px;
            }

            .note-actions {
                position: static;
                flex-direction: column;
                justify-content: flex-start;
                margin-top: 15px;
            }

            .note-actions .btn {
                width: auto;
                min-width: 80px;
            }

            .form-actions {
                flex-direction: column;
            }

            .toast {
                right: 10px;
                left: 10px;
                max-width: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>@yield('title', 'Note App')</h1>
        </div>

        @yield('content')
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="toast"></div>

    <script>
        // Toast notification functionality
        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            toast.textContent = message;
            toast.className = `toast ${type} show`;
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Show toast if there's a success message from session
        @if(session('success'))
            showToast('{{ session('success') }}', 'success');
        @endif

        @if(session('error'))
            showToast('{{ session('error') }}', 'error');
        @endif

        // Confirm delete
        function confirmDelete(message = 'Apakah Anda yakin ingin menghapus note ini?') {
            return confirm(message);
        }
    </script>
</body>
</html>
