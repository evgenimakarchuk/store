@extends('layouts.app')
  
@section('content')

  <div class="row base_row" style="margin: 0 5px;">
    <div class="panel panel-default bas">
      <div class="panel-heading" align="center" 
           style="font-size: 20px;">ОФОРМЛЕНИЕ И РЕДАКТИРОВАНИЕ ЗАКАЗА</div>
          @if($errors->any()) 
            <div class="alert alert-danger" role="alert"
                  style="color: red;width: 80%;margin-left: 10%;padding-left: 23%;">  
                <ul>
                  @foreach($errors->all() as $error) 
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
            </div>
          @endif
      <table class="table table-bordered panel-body" widht="100%">
        <tr>
          <td>
            Изобрбажение
          </td>
          <td>
            Название
          </td>
          <td>
            Цена
          </td>
          <td>
            Сумма
          </td>
          <td>
            Действия
          </td>
        </tr>
        <?php $itogo = 0; $colvo_vsego = 0;?>
        @foreach($tov as $one => $value)
          @if(isset($value->id))
            <?php $summa = $value->price * $val[$value->id];
              $itogo += $summa;
              $colvo = $val[$value->id];
              $colvo_vsego += $colvo;
            ?>
        <tr>
          <td>
            <div align="center">
              <img src="{{asset((isset($value->picture)) ? '/storage/'.$value->picture : '#')}}"
                                           align="center"/>
            </div>
          </td>

          <td>
            <h3 class="panel-title">{{$value->name}}</h3>
          </td>

          <td>
            <div class="price">
              {{$value->price}}
            </div>
          </td>

          <td>
              {{$summa}}
          </td>

          <td>
            <a href="{{asset('basket/delete/'.$value->id)}}"
               class="btn-times btn-cart" style="color: red;">&times</a>
            <form name="pro" action="{{asset('basket/edit/'.$value->id)}}" method="post">
              {{csrf_field()}}

              <table width="100%">
                <tr>
                  <td>
                    <input type="number" min="0" name="colvo" class="wid"value="{{$colvo}}">
                  </td>
                  <td>
                    <input type="submit" class="btn btn-primary btn-block btn-sm"
                           value="Пересчитать">
                  </td>
                </tr>
              </table>

            </form>
          </td>
        </tr>
          @endif
        @endforeach
        
        <tr>
          <p><a name="begin"></a></p>
          <td colspan="3">
            <div align="right">Всего</div>
          </td>
          <td>
            <div class="all"><b>{{$itogo}}</b> рублей</div> 
          </td>
          <td colspan="2">
            {{$colvo_vsego}}
          </td>
        </tr>

        <tr>       
          <td colspan="6">
            <div class="panel-body">
              <form class="form-horizontal" 
                    role="form" method="POST" action="{{ url('/basket/order') }}">
                {!! csrf_field() !!}
                                     
                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">Country 
                                    <abbr title="required" class="required">*</abbr></label>
                  <div class="col-md-6">
                    <select class="country_to_state country_select form-control" 
                            id="country" name="country">
                      <option value="">Select a country…</option>
                      <option value="AX">Åland Islands</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>  
                      <option value="AQ">Antarctica</option>                              
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>                                                                                                                                                                                                                                                         
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="PW">Belau</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>                                                    
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BN">Brunei</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo (Brazzaville)</option>
                      <option value="CD">Congo (Kinshasa)</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">CuraÇao</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="CI">Ivory Coast</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Laos</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macao S.A.R., China</option>
                      <option value="MK">Macedonia</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="KP">North Korea</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PS">Palestinian Territory</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="QA">Qatar</option>
                      <option value="IE">Republic of Ireland</option>
                      <option value="RE">Reunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russia</option>
                      <option value="RW">Rwanda</option>
                      <option value="ST">São Tomé and Príncipe</option>
                      <option value="BL">Saint Barthélemy</option>
                      <option value="SH">Saint Helena</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="SX">Saint Martin (Dutch part)</option>
                      <option value="MF">Saint Martin (French part)</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="SM">San Marino</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia/Sandwich Islands</option>
                      <option value="KR">South Korea</option>
                      <option value="SS">South Sudan</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom (UK)</option>
                      <option value="US">United States (US)</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VA">Vatican</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="WS">Western Samoa</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>                                                                                                   
                    </select>
                      @if ($errors->has('country'))
                        <span class="help-block"><strong>{{ $errors->first('country') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>                      
                                                                    
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">First Name
                    <abbr title="required" class="required">*</abbr>
                  </label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="name"
                          value="{{ (old('fio') == true) ? old('fio') : $name }}">    
                      @if ($errors->has('name'))
                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>
                
                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">Last Name
                        <abbr title="required" class="required">*</abbr>
                  </label>                                              
                  <div class="col-md-6">
                    <input type="text" value="{{ (old('fio') == true) ? old('fio') : $name }}" 
                        id="last_name" name="last_name" class="form-control" placeholder="">
                      @if ($errors->has('last_name'))
                        <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>
                                           
                <div class="clear"></div>
                
                <div class="form-group">
                  <label class="col-md-4 control-label">Company Name</label>                                               
                  <div class="col-md-6">
                    <input type="text" value="" placeholder="" id="company_name" 
                           name="company_name" class="form-control">
                      @if ($errors->has('company_name'))
                        <span class="help-block"><strong>{{ $errors->first('company_name') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('address_street') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">Address
                          <abbr title="required" class="required">*</abbr>
                  </label>                                               
                  <div class="col-md-6">
                    <input type="text" value="" placeholder="Street address" id="address_street" 
                           name="address_street" class="form-control">
                       @if ($errors->has('address_street'))
                        <span class="help-block"><strong>{{ $errors->first('address_street') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('address_apartment') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-6">
                    <input id="address_apartment" name="address_apartment" class="form-control" 
                      type="text" value="" placeholder="Apartment, suite, unit etc. (optional)">
                      @if ($errors->has('address_apartment'))
                        <span class="help-block"><strong>{{ $errors->first('address_apartment') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">Town / City<abbr title="required" 
                         class="required">*</abbr>
                  </label>                                                
                  <div class="col-md-6">
                    <input type="text" value="" placeholder="Town / City" id="city" 
                           name="city" class="form-control">
                      @if ($errors->has('city'))
                        <span class="help-block"><strong>{{ $errors->first('city') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">                                            
                  <label class="col-md-4 control-label">County</label>                                                
                  <div class="col-md-6">
                    <input type="text" id="county" name="county" placeholder="State / County" 
                           value="" class="form-control">
                  </div>
                </div>

                <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">                                            
                  <label class="col-md-4 control-label">Postcode<abbr title="required" 
                         class="required">*</abbr>
                  </label>                                                
                  <div class="col-md-6">
                    <input type="text" value="" placeholder="Postcode / Zip" id="postcode" 
                           name="postcode" class="form-control">
                      @if ($errors->has('postcode'))
                        <span class="help-block"><strong>{{ $errors->first('postcode') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>
 
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">E-Mail<abbr title="required" 
                         class="required">*</abbr>
                  </label>  
                  <div class="col-md-6">
                    <input class="form-control" name="email" type="email" 
                           value="{{ (old('email') == true) ? old('email') : $email }}">
                      @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">Phone<abbr title="required" 
                         class="required">*</abbr>
                  </label>  
                    <div class="col-md-6">
                      <input  class="form-control" name="phone" type="text" value="{{ old('phone') }}"> 
                        @if ($errors->has('phone'))
                        <span class="help-block"><strong>{{ $errors->first('phone') }}
                              <abbr title="required" class="required">*</abbr></strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">                            
                  <div class="col-md-6 col-md-offset-4">                  
                    <button class="btn btn-primary btn-block" type="submit" id="clearBasket">
                      <i class="fa fa-btn fa-user">  Подтвердить заказ</i> 
                    </button>                   
                  </div>                                   
                </div>
                 
              </form>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
@endsection

<!-- selected="selected"  -->