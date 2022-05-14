<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WhitezipTest - Joaquin Siscar Cervera</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html{line-height:1.15;-webkit-text-size-adjust:100%}
        body{margin:0}a{background-color:transparent}[hidden]{display:none}
        html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
  </head>
  <body class="antialiased">

    @if(session()->has('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
      </div>
    @endif

    @if($errors->any())
      <div class="alert alert-danger">
        Please check form errors below
      </div>
    @endif

    <div class="container">

      <div class="card card-default">

        <div class="card-header">Joaquin Test</div>

        <div class="card-body">

          <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-100 sm:items-center py-4 sm:pt-0">

            <p style="width: 100%; clear: both; font-weight: bold;">
              Is {{ date('Y') }} a leap year? 
              <br />
              <span style="font-weight: normal;">{{ $leapYear ? 'Yes' : 'No' }}</span>
            </p>

            <p style="width: 100%; clear: both; font-weight: bold;">
              First 30 FibonnaciNumbers: 
              <br />
              <span style="font-weight: normal;">{{ implode(', ', $fibonnaciNumbers) }}</span>
            </p>

            <p style="width: 100%; clear: both; font-weight: bold;">
              All Users:
            </p>

            <table class="table">
                
                <thead>

                    <th>Name</th>

                    <th>Last Name</th>

                    <th>Email</th>

                </thead>

                <tbody>

                  @foreach($allUsers as $user)

                  <tr>

                    <td>{{ $user->name }}</td>

                    <td>{{ $user->last_name }}</td>

                    <td>{{ $user->email }}</td>

                  </tr>

                  @endforeach

                </tbody>

            </table>

            <p style="width: 100%; clear: both; font-weight: bold;">
              Users job position:
            </p>

            <table class="table">
                
              <thead>

                  <th>Name</th>

                  <th>Last Name</th>

                  <th>Job Name</th>

              </thead>

              <tbody>

                @foreach($userJobPositions as $userJobPosition)

                <tr>

                  <td>{{ $userJobPosition->name }}

                  <td>{{ $userJobPosition->last_name }}

                  <td>{{ ucfirst($userJobPosition->job_name) }}

                </tr>

                @endforeach

              </tbody>

            </table>

            <p style="width: 100%; clear: both; font-weight: bold;">Boss Employee History:</p>

            <table class="table">
                
              <thead>

                  <th>Boss Name</th>

                  <th>Boss Last Name</th>

                  <th>Employee Name</th>

                  <th>Employee Last Name</th>

              </thead>

              <tbody>

                @foreach($bossEmployeeHistory as $history)

                <tr>

                  <td>{{ $history->boss_name }}</td>

                  <td>{{ $history->boss_last_name }}</td>

                  <td>{{ $history->employee_name }}</td>

                  <td>{{ $history->employee_last_name }}</td>

                </tr>

                @endforeach

              </tbody>

            </table>

            <p style="width: 100%; clear: both; font-weight: bold;">Create Users:</p>

            @if($errors->any())

              <div class="alert alert-danger">
          
              <ul class="list-group">
          
                  @foreach($errors->all() as $error)
          
                  <li class="list-group-item text-danger">
          
                      {{ $error }}
          
                  </li>
          
                  @endforeach
          
              </ul>
          
              </div>
          
            @endif

            <form action="{{ route('store-user') }}" method="POST" enctype="multipart/form-data">

              @csrf

              <div class="form-group">

                <label for="name">Name</label>

                <input  
                  type="text" 
                  class="form-control" 
                  name="name" 
                  id="name"
                  value="">

                <label for="last_name">Last Name</label>

                <input  
                  type="text" 
                  class="form-control" 
                  name="last_name" 
                  id="last_name"
                  value="">

                <label for="email">Email</label>

                <input  
                  type="email" 
                  class="form-control" 
                  name="email" 
                  id="email"
                  value="">

                <label for="password">Password</label>

                <input  
                  type="password" 
                  class="form-control" 
                  name="password" 
                  id="password"
                  value="">

                  <label for="job">Job Position</label>

                  <select name="job" id="job" class="form-control">

                    @foreach($jobs as $job)

                    <option value="{{ $job->id }}">
  
                      {{ ucfirst($job->name) }}
  
                    </option>
  
                    @endforeach
  
                  </select>
  
              </div>

              <div class="form-group">

                <label for="user_type">User Type</label>

                <select name="user_type" id="user_type" class="form-control user_type">

                  <option value="boss" selected>Boss</option>

                  <option value="employee">Employee</option>

                </select>

              </div>

              <div style="display: none;" class="form-group boss-list">

                <label for="boss_list">Please select a boss from Boss List</label>

                <select name="boss_list" id="boss_list" class="form-control">

                  <option disabled selected value> -- please select your boss -- </option>

                  @foreach($allUsers as $user)

                  @if ('employee' === $user->type)

                    @continue

                  @endif

                  <option value="{{ $user->id }}">

                    {{ $user->name . ' ' . $user->last_name }}

                  </option>

                  @endforeach

                </select>

              </div>

              <div class="form-group employee-list">

                <label for="employee_list">Employee List</label>

                <select name="employee_list[]" id="employee_list" class="form-control employee-selector" multiple>

                  {{ $counter = 0; }}

                  @foreach($allUsers as $user)

                  @if ('boss' === $user->type)

                    @continue

                  @endif

                  <option value="{{ $user->id }}">
                    {{ $user->name . ' ' . $user->last_name }}
                  </option>

                  {{ $counter++; }}

                  @endforeach

                </select>

              </div>

              <br />

              <div class="form-group">

                  <button 
                    type="submit"
                    class="btn btn-info btn-sm">
                    Go
                </button>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </body>
</html>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  jQuery(document).ready(function() {
      jQuery('.employee-selector').select2({
        placeholder: 'Please select your employee(s)'
      });

      jQuery('.user_type').on('change', function () {
        if ('boss' === this.value) {

          jQuery('.employee-list').show();

          jQuery('.boss-list').hide();

        } else if ('employee' === this.value) {

          jQuery('.employee-list').hide();

          jQuery('.boss-list').show();
        }
      });
  })
</script>