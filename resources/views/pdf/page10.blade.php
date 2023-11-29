<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page10</title>
</head>

<style>
    body {

        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
    }

    table {

        border: 1px solid #ccc;
        border-collapse: collapse;
        padding: 0;
        margin: 0;
        width: 100%;
    }

    caption {

        font-size: 2em;
        margin: .25em 0 .75em;
    }

    table tr {
        background: #f8f8f8;
        border: 1px solid #ccc;
        padding: .35em;
    }

    table th,
    table td {
        padding: .625em;
        text-align: center;
    }

    table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
    }

    /* Media Queries*/

    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            display: none;
        }

        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: .625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: .8em;
            text-align: right;
        }

        table td:before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
    }

    /* Media Queries*/
</style>

<body>
    <table>
        <caption>Personal Detail</caption>
        <thead>

        </thead>
        <tbody>
            <tr>
                <td> First Name</td>
                <td>{{ $first_name }}</td>
            </tr>
            <tr>
                <td> Last Name</td>
                <td>{{ $last_name }}</td>
            </tr>
            <tr>
                <td> National Insurance</td>
                <td>{{ $national_insurance }}</td>
            </tr>
            <tr>
                <td> Date Of Birth</td>
                <td>{{ $dob }}</td>
            </tr>
            <tr>
                <td> Email</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <td> Post Code</td>
                <td>{{ $post_code }}</td>
            </tr>
            <tr>
                <td> Telephone</td>
                <td>{{ $telephone1 }}</td>
            </tr>
            <tr>
                <td> Mobile</td>
                <td>{{ $mobile }}</td>
            </tr>
            <tr>
                <td> Address</td>
                <td>{{ $address }}</td>
            </tr>
            <tr>
                <td> Emergency First Name</td>
                <td>{{ $e_first_name }}</td>
            </tr>
            <tr>
                <td> Emergency Last Name</td>
                <td>{{ $e_last_name }}</td>
            </tr>
            <tr>
                <td> Emergency Email</td>
                <td>{{ $e_email }}</td>
            </tr>
            <tr>
                <td> Emergency Post Code</td>
                <td>{{ $e_post_code }}</td>
            </tr>
            <tr>
                <td> Emergency telephone1</td>
                <td>{{ $e_telephone1 }}</td>
            </tr>
            <tr>
                <td> Emergency mobile</td>
                <td>{{ $e_mobile }}</td>
            </tr>
            <tr>
                <td> Emergency address</td>
                <td>{{ $e_address }}</td>
            </tr>
            <tr>
                <td> bank name</td>
                <td>{{ $bank_name }}</td>
            </tr>
            <tr>
                <td> bank short code</td>
                <td>{{ $bank_short_code }}</td>
            </tr>
            <tr>
                <td> bank account number</td>
                <td>{{ $bank_account_number }}</td>
            </tr>
            <tr>
                <td> is criminal?</td>
                <td>{{ $is_criminal ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td> criminal detail</td>
                <td>{{ $criminal_detail }}</td>
            </tr>
            <tr>
                <td> declaration_name</td>
                <td>{{ $declaration_name }}</td>
            </tr>
            <tr>
                <td> declaration date</td>
                <td>{{ $declaration_date }}</td>
            </tr>

        </tbody>
    </table>


</body>

</html>
{{-- ENd --}}
