<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333333; padding: 20px; background-color: #f4f4f4;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 24px; color: #333333; text-align: center;">Pesan Baru dari Kontak Kami</h1>
        <p style="font-size: 16px; line-height: 1.5; margin-bottom: 10px;"><strong>Nama:</strong> {{ $data['name'] }}</p>
        <p style="font-size: 16px; line-height: 1.5; margin-bottom: 10px;"><strong>Telepon:</strong> {{ $data['phone'] }}</p>
        <p style="font-size: 16px; line-height: 1.5; margin-bottom: 10px;"><strong>Email:</strong> {{ $data['email'] }}</p>
        <p style="font-size: 16px; line-height: 1.5; margin-bottom: 10px;"><strong>Website:</strong> {{ $data['website'] }}</p>
        <p style="font-size: 16px; line-height: 1.5; margin-bottom: 10px;"><strong>Pesan:</strong> {{ $data['message'] }}</p>
    </div>
</body>
</html>
