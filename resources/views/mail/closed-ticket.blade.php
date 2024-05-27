<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avviso di Chiusura Ticket</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        main{
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);"
        }
    </style>
</head>
<body >

    <div >
        <h2 class="text-center fs-1 fw-bolder">Avviso di Chiusura Ticket</h2>

        <p>Gentilssimo {{ $ticket->operator->first_name }},</p>

        <p>Desideriamo informarti che il ticket numero <strong>#{{ $ticket->id }}</strong> è stato chiuso con successo.</p>

        <p>Ricapitolando:</p>
        <ul>
            <li><strong>Categoria:</strong> {{ $ticket->category->name }}</li>
            <li><strong>Priorità:</strong> <span>{{ $ticket->priority->name }}</span></li>
            <li><strong>Titolo:</strong> {{ $ticket->title }}</li>
            <li><strong>Descrizione:</strong> {{ $ticket->description }}</li>
            <li><strong>Note:</strong> {{ $ticket->notes }}</li>
        </ul>

        <p>Per ulteriori informazioni, non esitare a contattarci.</p>

        <p style="text-align: center;">Grazie,<br>Il Team di Amministrazione della Boolean Ticket Management Platform</p>
    </div>

</body>
</html>
