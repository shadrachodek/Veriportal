<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Certificate Issuing and Fulfilement System</title>
</head>
<body>

    <table>
        <thead>
        <tr>
            <th>Document ID</th>
            <th>Document Type</th>
            <th>Status</th>
            <th>File Number</th>
            <th>Full Name</th>
        </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
            <tr>
                <td>{{ $document->document_id }}</td>
                <td>{{ $document->documentable_type }}</td>
                <td>{{ $document->status }}</td>
                <td>{{ $document->documentable->file_number }}</td>
                <td>{{ $document->owner->full_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
