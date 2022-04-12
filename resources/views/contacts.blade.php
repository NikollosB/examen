
@extends('layouts', ['title' => 'Contact page'])

@section('content')
   
    <h1>Contacts page</h1>
  

    <div>
    <progress/>
</div>



<h3>
Date de contact
</h3>

<pre>
MD-2005
mun.Chișinău,
str. Constantin Tănase, 9 
mail@sfs.md
</pre>


<table class="table table-bordered">
        <tr>
            <th>Denumirea direcției</th>
            <th>Numele, Prenumele</th>
            <th>Funcția</th>
            <th>Nr. de tel.</th>
        </tr>

        <tr>
            <td style="font-weight: bold;">Anticamera</td>
            <td>Albu Rozalina</th>
            <td>Directoare</td>
            <td>(022) 82-33-53</td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Anticamera</td>
            <td>Radu Gheorghe</th>
            <td>Director adjunct</td>
            <td>(022) 82-33-02</td>
        </tr>
       
        <tr>
            <td style="font-weight: bold;">Direcția Audit Intern</td>
            <td>
Damian Sergiu </td>
            <td>Şef adjunct interimar Direcție</td>
            <td>(022) 82-33-61</td>
        </tr>
       
        
    </table>
@endsection