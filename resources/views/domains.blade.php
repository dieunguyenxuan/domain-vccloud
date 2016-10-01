<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Domain managerment</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Domain</th>
        </tr>
      </thead>
      <tbody>
        @foreach($domain_data as $domain)
        <tr>
          <td>{!!$domain["domain"]!!}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
