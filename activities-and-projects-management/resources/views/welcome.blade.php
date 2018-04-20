
@extends('layouts.app')

@section('title', 'SOWEDA/WELCOME')


@section('footer')
    @parent
@endsection

@section('content')

    <div class="col-md-3 offset-2">
        <div class="main-login main-center">
            <h6><b>Follow up your Application</b></h6>
                <div class="form-group">
                    <label for="matricule" class="cols-sm-2 control-label">Matricle</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control " name="matricle" id="matricle"  placeholder="Matricle received during application" required/>
                        </div>
                    </div>
                </div>
            <div id="token-followup">{{ csrf_field() }}</div>
                <div class="form-group ">
                    <button  class="btn btn-success" id="btn-followup">Follow Up</button> <span id="folloupLoader" style="display: none;">followuping ...</span></div>



        </div>
    </div>
    <div class="col-md-3">
        <div class="main-login main-center">
            <h3>Reserved for Administration</h3>
            <h5>Login</h5>
            <form method="post" action="{{url('/login')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="login-email" class="cols-sm-2 control-label">E-Mail</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="email" class="form-control " name="login-email" id="login-email"  placeholder="E-Mail" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="login-password" class="cols-sm-2 control-label">Applicant</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="password" class="form-control " name="login-password" id="login-password"  placeholder="Password" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-3 ">

        <div class="main-login main-center">
            <h3>Application</h3>
            <form class="" method="post" action="{{url('apply')}}" onsubmit="document.getElementById('successmessage').innerHTML = ''; document.getElementById('dangermessage').innerHTML = '';"
            id="applicationform">

                @if(isset($receiveResultStatusCode) and $receiveResultStatusCode < 400)

                    <div class="alert-success" style="font-size: 16px; padding: 10px;" id="successmessage">The system Receive your request successfully.
                        The Matricule is: <strong>{{$applicationCreated->matricule}}</strong>. You can follow the evolution of your application by using this matricule.
                      Notifications  have been sent to contact specified in the application and contain this Matricule. Thank for your contribution.</div>



                @else
                    @if(isset($receiveResultStatusCode) and !($receiveResultStatusCode < 400))
                        <div class="alert-dansger" style="font-size: 16px;" id="dangermessage">An Error occured</div>
                    @endif
                 @endif

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="division" class="cols-sm-2 control-label">Division</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <select id="division" name="division" class="form-control" onchange="loadSubdivision(this.value);">
                                @foreach($divisions as $division)
                                    <option value="{{$division->id}}">{{$division->name}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="divisionname" value="" id="divisionname">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="subdivision" class="cols-sm-2 control-label">Subdivision</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <select id="subdivision" name="subdivision" class="form-control" onchange="setSubdivisionName();">
                            </select>
                            <i class="fa fa-spinner fa-spin" id="subdivisionLoader" style="font-size:24px"></i>
                        </div>
                        <input type="hidden" name="subdivisionname" value="" id="subdivisionname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="village" class="cols-sm-2 control-label">Village / Quarter</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control " name="village" id="village" data-provide="typeahead"  placeholder="Village Quarter or Ressort" required/>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="applicant" class="cols-sm-2 control-label">Applicant</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control " name="applicant" id="applicant"  placeholder="Social raison" required/>
                        </div>
                    </div>
                </div>

                <fieldset>
                    <legend>Focal Points</legend>
                    <div class="representative">
                        <div class="form-group">
                            <label for="namerepresentative0" class="cols-sm-2 control-label">First Focal Point Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="namerepresentative0" id="namerepresentative0"  placeholder="Representative 1" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emailrepresentative0" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="emailrepresentative0" id="emailrepresentative0"  placeholder="E-Email" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telrepresentative0" class="cols-sm-2 control-label">Phone Number</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa- fa" aria-hidden="true"></i></span>
                                    <input type="tel" class="form-control" name="telrepresentative0" id="telrepresentative0"  placeholder="Phone Number" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="addrepresentativegroup">
                        <div class="col-md-2 offset-9">
                            <button class="btn btn-success pull-right btn-sm" style="border-radius: 50%;color: #4ad363; background: white;"
                                    onclick="addrepresentative(); return false;">Add</button>
                        </div>
                    </div>

                    <script type="text/javascript">
                        function addrepresentative() {
                            var representatives = document.getElementsByClassName("representative");
                            var leng = representatives.length;
                            var newElem = document.createElement('DIV');
                            newElem.setAttribute('class', 'representative');

                            var rang = (leng === 1)? "Second":"Third";

                            if (leng === 3) return;

                            //var index = leng;
                            var innerHtml = '<div class="form-group">\n' +
                                '                            <label for="namerepresentative' + leng + '" class="cols-sm-2 control-label">'+rang+' Focal Point Name</label>\n' +
                                '                            <div class="cols-sm-10">\n' +
                                '                                <div class="input-group">\n' +
                                '                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>\n' +
                                '                                    <input type="text" class="form-control" name="namerepresentative' + leng + '" id="namerepresentative' + leng + '" ' +
                                ' placeholder="Representative ' + (leng + 1) + '" required/>\n' +
                                '                                </div>\n' +
                                '                            </div>\n' +
                                '                        </div>\n' +
                                '                        <div class="form-group">\n' +
                                '                            <label for="emailrepresentative' + leng + '" class="cols-sm-2 control-label">'+rang+' Email</label>\n' +
                                '                            <div class="cols-sm-10">\n' +
                                '                                <div class="input-group">\n' +
                                '                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>\n' +
                                '                                    <input type="email" class="form-control" name="emailrepresentative' + leng + '" id="emailrepresentative' + leng + '"  ' +
                                'placeholder="E-Email" required/>\n' +
                                '                                </div>\n' +
                                '                            </div>\n' +
                                '                        </div>\n' +
                                '\n' +
                                '                        <div class="form-group">\n' +
                                '                            <label for="telrepresentative' + leng + '" class="cols-sm-2 control-label">'+rang+' Phone Number</label>\n' +
                                '                            <div class="cols-sm-10">\n' +
                                '                                <div class="input-group">\n' +
                                '                                    <span class="input-group-addon"><i class="fa fa- fa" aria-hidden="true"></i></span>\n' +
                                '                                    <input type="tel" class="form-control" name="telrepresentative' + leng + '" id="telrepresentative' + leng + '"  ' +
                                'placeholder="Phone Number" required/>\n' +
                                '                                </div>\n' +
                                '                            </div>\n' +
                                '                        </div>';

                            newElem.innerHTML = innerHtml;

                            representatives[leng-1].appendChild(newElem);

                            if (leng === 2){
                                document.getElementById('addrepresentativegroup').style.display = 'none';
                            }

                        }
                    </script>
                </fieldset>


                <div class="form-group">
                    <label for="description" class="cols-sm-2 control-label">Description</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="hidden"    value="0" id="counter">
                            <textarea name="description" id="description" maxlength="5000" class="form-control" rows="10" placeholder="Describe the activity"
                            onkeyup="textCounter(this,'counter', 5000, 'count_message');" required></textarea>

                        </div>
                        <div class="-pull-right" style="margin-right: 5px;  text-align: right; font-size: 10px;">
                            <span class="pull-right" id="count_message"></span>
                        </div>
                    </div>
                    <script>
                        function textCounter(field1,field2,maxlimit, labelfield)
                        {
                            var countfield = document.getElementById(field2);
                            if (field1.value.length > maxlimit) {
                                field1.value = field1.value.substring(0, maxlimit);
                                return false;
                            } else {
                                countfield.value = maxlimit - field1.value.length;
                            }

                            document.getElementById(labelfield).innerHTML = "" + countfield.value + "   characters remain"
                        }

                        var description = document.getElementById('description');
                        textCounter(description,"counter",5000, "count_message");
                    </script>
                </div>



                <div class="form-group ">
                    <button type="submit" class="btn btn-success">Apply</button>
                </div>

            </form>
        </div>

    </div>


    <div class="col-md-10 offset-1" style="margin-top: 12px;" id="followupresultcontent">
        <div class="card" id="followupresult">
            <div class="card-header">
                <h2 id="followupTitle" class="modal-title"></h2>
            </div>
            <div class="card-body">
                <nav>
                    <ol class="cd-multi-steps text-top" id="followupsteps" style="padding: 0px; margin: 0px; text-align: center; width: 100%;"></ol>
                </nav>
            </div>
        </div>
    </div>


@endsection
