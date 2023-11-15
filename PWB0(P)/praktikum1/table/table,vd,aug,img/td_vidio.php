    <?php
    $hewan = [

        [
            "nama" => "Anjing",
            "img" => "anjing.jpg",
            "audio" => "anjing.mp3",
            "vidio" => "anjing.mp4"
        ],
        [
            "nama" => "Kucing",
            "img" => "kucing.jpg",
            "audio" => "kucing.mp3",
            "vidio" => "kucing.mp4"
        ],
        [
            "nama" => "Serigala",
            "img" => "serigala.jpg",
            "audio" => "serigala.mp3",
            "vidio" => "serigala.mp4"
        ],
        [
            "nama" => "Harimau",
            "img" => "harimau.jpg",
            "audio" => "harimau.mp3",
            "vidio" => "harimau.mp4"
        ],
        [
            "nama" => "Paus",
            "img" => "paus.jpg",
            "audio" => "paus.mp3",
            "vidio" => "paus.mp4"
        ],
        [
            "nama" => "Burung Kaka Tua",
            "img" => "burung.jpg",
            "audio" => "burung.mp3",
            "vidio" => "burung.mp4"
        ]

    ];

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Raihan firmansyah</title>
    </head>

    <body>
        <h1>table hewan</h1>
        <p>nama :</p>
        <table border="1">
            <thead>
                <tr>
                    <th>nama hewan</th>
                    <th>gambar</th>
                    <th>audio</th>
                    <th>vidio</th>
                </tr>
            </thead>
            <?php foreach ($hewan as $hwn) : ?>
                <tbody>
                    <tr>
                        <td>
                            <center>
                                <h5>
                                    <?= $hwn["nama"]; ?>
                                </h5>
                            </center>
                        </td>
                        <td>
                            <img src="img/<?= $hwn["img"]; ?>">
                        </td>
                        <td>
                            <audio controls>
                                <source src="mp3/<?= $hwn["audio"]; ?>" type="audio/mp3">
                            </audio>
                        </td>
                        <td>
                            <video controls width="250px">
                                <source src="mp4/<?= $hwn["vidio"]; ?>">
                            </video>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </body>

    </html>