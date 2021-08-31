<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               
                       
                            
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>


<div style="overflow-x:auto;">
  <table>
    <tr><th>No. of patients</th>
        <th>Name</th>
        
        <th>Phone</th>
        <th>Gender</th>
        <th>email</th>
        <th>Region</th>
        <th>Blood Group </th>
 <th>date of birth</th>
 
        <th>Actions</th>
        
    </tr>
</thead>
<tfoot>
    <tr><th>No. of patients</th>
        <th>Name</th>
        
        <th>Phone</th>
        <th>Gender</th>
        <th>email</th>
        <th>Region</th>
        <th>Blood Group </th>
 <th>date of birth</th>
 
        <th>Actions</th>
    </tr>
</tfoot>
<tbody> 
    @foreach ($patient as  $patient )
    <tr>
        <td>{{$patient->id }}</td>
        <td>{{ $patient->name }}</td>
        <td>{{ $patient->phone }}</td>
        <td>{{ $patient->gender}}</td>
        <td>{{ $patient->email }}</td>
        <td>{{ $patient->region }}</td>
        <td>{{ $patient->bloodgroup }}</td>
        <td>{{ $patient->updated_at->diffForHumans() }}</td>
<td><a onclick="confirm('are you sure you want to delete {{ $patient->name }} ?')?document.getElementById('delete-{{ $patient->id }}').submit():''" href="#"><i class="fas fa-trash"></i>delete</a>
<form action="{{ route('patient.destroy',$patient->id) }}" method="post" id="delete-{{ $patient->id }}" >
@csrf
@method('DELETE')</form></td>

@endforeach

  </table>
</div>

</body>
</html>
                  
                    
<!DOCTYPE html>
<html>
  <head>
    <title>Hospital</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      }
      p.top-info {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #1c87c9; 
      }
     .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/02/fb57ab781c34da322c884532bfec751e843e36fc.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.6); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #1c87c9;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #1c87c9;
      color: #1c87c9;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #1c87c9;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: auto;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #1c87c9;
      font-size: 16px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #1e6fa0;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item, .position-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item .item, .position-item .item {
      width: calc(50% - 8px);
      }
      .contact-item input, .position-item input {
      width: calc(100% - 12px);
      }
      .position-item select {
      width: 100%;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
        <form action="{{ route('patient.store') }}" method="post">
    
            @csrf
        <div class="row">
        <div class="col-lg-12">
        <div class="form-group input-group-sm">
            <label for="name"> Full Name</label>
            <input type="text" class="form-control" name="name" id="name">
            
            </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group input-group-sm">
                <label for="name">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
                
                </div>
                </div>
        
                <div class="col-lg-12">
                    <div class="form-group input-group-sm">
                        <label for="name">Gender</label>
                       <select class="form-control" name="gender" id="gender">
                           <option >Male</option>
                           <option >Female</option>
                       </select>
                    </div>
                </div>     
        
                <div class="col-lg-12">
                    <div class="form-group input-group-sm">
                        <label for="dob">Dateof Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                        
                        </div>
                        </div>
        
                        <div class="col-lg-12">
                            <div class="form-group input-group-sm">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" id="email">
                                
                                </div>
                                </div>
        
        
                                <div class="col-lg-12">
                                    <div class="form-group input-group-sm">
                                        <label for="region"> region</label>
                                        <input type="text" class="form-control" name="region" id="region">
                                        
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
        <div class="form-group input-group-sm">
            <label for="name"> Full Name</label>
            <input type="text" class="form-control" name="name" id="name">
            
            </div>
            </div>
        
        
            <div class="col-lg-12">
                <div class="form-group input-group-sm">
                    <label for="name">Blood Group</label>
                   <select class="form-control" name="bloodgroup" id="bloodgroup">
                       <option >O</option>
                       <option >A</option>
                       <option >B</option>
                       <option >B-</option>
                   </select>
                </div>
            </div>
        
        
        
        
        
        
        
                   <div class="col-lg-12">
                   <button type="submit" class="btn btn-primary btn sm">save changes</button>
                </div>
                   </div>
               </div>
        </form>
    </div>
  </body>
