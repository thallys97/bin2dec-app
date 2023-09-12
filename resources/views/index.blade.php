<!DOCTYPE html>
<html>
<head>
    <title>Conversor Binário para Decimal</title>
</head>
<body>
    <h1>Conversor Binário para Decimal</h1>

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/convert">
        @csrf
        <label for="binary_number">Digite até 8 dígitos binários:</label>
        <input type="text" name="binary_number" id="binary_number" maxlength="8">
        <button type="submit">Converter</button>
    </form>

    @if(isset($decimalNumber))
        <p>O equivalente decimal é: {{ $decimalNumber }}</p>
    @endif
</body>
</html>