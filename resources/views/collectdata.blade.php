<h1> Laravel Calculator </h1>
<form action="compute" method="post">
    @csrf
    <label>a<label>
        <input type="number" name=a placeholder="input a"/><br><br>
    <label>b<label>
        <input type="number" name=b placeholder="input b"/><br><br>
    <label>addORminus<label>
        <input type="text" name=c placeholder="input operation"/><br><br>
    <button type="submit">Equals</button>
</form>    