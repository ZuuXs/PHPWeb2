<!DOCTYPE html>
<html>
    <head>
        <title>Liste des départements</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h1>Liste des départements</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departements as $departement)
                    <tr>
                        <td>{{ $departement->no }}</td>
                        <td>{{ $departement->nom }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>