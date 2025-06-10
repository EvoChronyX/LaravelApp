<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's talk - Contact</title>
    <!-- Google Fonts: Poppins and Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #2563eb;
            --neutral-text: #333;
            --border-color: #e0e0e0;
            --input-border: #ddd;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', 'Roboto', Arial, sans-serif;
            background: #fafbfc;
            color: var(--neutral-text);
            min-height: 100vh;
        }
        .contact-header {
            text-align: center;
            padding: 3rem 1rem 1.5rem 1rem;
        }
        .contact-header h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary-blue);
            letter-spacing: -1px;
        }
        .contact-header p {
            font-size: 1.15rem;
            font-weight: 400;
            color: var(--neutral-text);
            max-width: 480px;
            margin: 0 auto;
        }
        .contact-form-container {
            max-width: 600px;
            margin: 2rem auto 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
            padding: 2.5rem 2rem;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        label {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--neutral-text);
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 1px solid var(--input-border);
            border-radius: 6px;
            font-size: 1rem;
            font-family: 'Roboto', Arial, sans-serif;
            background: #fafbfc;
            color: var(--neutral-text);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
            resize: none;
        }
        input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 2px rgba(37,99,235,0.08);
        }
        textarea {
            min-height: 120px;
            min-rows: 5;
            resize: vertical;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .submit-btn {
            display: inline-block;
            padding: 1rem 0;
            background: var(--primary-blue);
            color: #fff;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 0.5rem;
            transition: background 0.18s;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px rgba(37,99,235,0.08);
        }
        .submit-btn:hover, .submit-btn:focus {
            background: #1741b6;
        }
        @media (max-width: 700px) {
            .contact-form-container {
                max-width: 95vw;
                padding: 2rem 1rem;
                margin: 1.5rem auto 0 auto;
            }
            .contact-header {
                padding: 2.5rem 0.5rem 1rem 0.5rem;
            }
            .contact-header h1 {
                font-size: 2rem;
            }
            .contact-header p {
                font-size: 1rem;
            }
        }
        @media (max-width: 480px) {
            .contact-form-container {
                padding: 1.2rem 0.5rem;
            }
            .contact-header {
                padding: 2rem 0.2rem 0.7rem 0.2rem;
            }
            .contact-header h1 {
                font-size: 1.3rem;
            }
            .contact-header p {
                font-size: 0.95rem;
            }
            .submit-btn {
                font-size: 1rem;
                padding: 0.85rem 0;
            }
        }
    </style>
</head>
<body>
    <div class="contact-header">
        <h1>Let's talk</h1>
        <p>To request a queue or want to meet up for coffee, contact me directly or fill out the form and I will get back to you soon.</p>
    </div>
    <div class="contact-form-container">
         <form method="POST" {{-- action="{{ route('contact.send') }}" --}}> 
            @csrf
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required autocomplete="off" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required autocomplete="off" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" required placeholder="Type your message here..."></textarea>
            </div>
            <button type="submit" class="submit-btn">SEND MESSAGE</button>
        </form>
    </div>
</body>
</html>
