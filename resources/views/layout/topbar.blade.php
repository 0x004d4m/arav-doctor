<a class="bottom-to-top rounded-soft" href="#top" data-fancyscroll><span class="fas fa-angle-up lg" data-fa-transform="down-2"></span></a>

<nav class="navbar navbar-expand navbar-light bg-light sticky-top font-weight-semi-bold fs--1 text-base shadow-sm">
    <div class="container">
    <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown"><a class="btn btn-light btn-sm dropdown-toggle mr-2" id="languageDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="template/assets/img/illustrations/united-states.svg" width="20" alt="" /></a>
        <div class="dropdown-menu" aria-labelledby="languageDropdown"><a class="dropdown-item font-weight-semi-bold text-primary d-flex justify-content-between" href="#!">
            <div class="media align-items-center"><img src="{{url('template/assets/img/illustrations/united-states.svg')}}" width="20" alt="" />
                <div class="media-body ml-2">EN</div>
            </div><span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span>
            </a><a class="dropdown-item font-weight-semi-bold text-primary" href="#!">
            <div class="media align-items-center"><img src="{{url('template/assets/img/illustrations/germany.svg')}}" width="20" alt="" />
                <div class="media-body ml-2">DE</div>
            </div>
            </a><a class="dropdown-item font-weight-semi-bold text-primary" href="#!">
            <div class="media align-items-center"><img src="{{url('template/assets/img/illustrations/saudi-arabia.svg')}}" width="20" alt="" />
                <div class="media-body ml-2">AR</div>
            </div>
            </a></div>
        </li>
        <li class="nav-item">
        <form class="input-iconic">
            <div class="input-icon"><button type="submit"><span class="fas fa-search text-300"></span></button></div><input class="form-control form-control-sm" type="search" placeholder="Search..." />
        </form>
        </li>
    </ul>
    <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="btn btn-outline-danger btn-sm mx-2" href="#!"><span class="d-none d-md-inline">Find a </span>Doctor</a></li>
        <li class="nav-item"><a class="btn btn-primary btn-sm" href="#appointmentModal" data-toggle="modal"><span class="d-none d-md-inline">Request </span>Appointment</a></li>
    </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-200 navbar-split py-3">
    <div class="container"><a class="navbar-brand d-flex align-items-center z-index-1" href="index.html"><img src="{{url('template/assets/img/logo.png')}}" alt="" height="30" /></a>
    <div class="navbar-nav text-base d-none d-lg-flex">
        <div class="nav-item">
        <div class="media border-right pr-3 mr-3"><span class="fas fa-map-marker-alt fs-2 text-primary" data-fa-transform="down-1.5"></span>
            <div class="media-body ml-2">
            <h5 class="fs-0 mb-1">Address</h5>
            <p class="fs--1 mb-0">5525 W Slauson Ave,<br />LA, CA 90056, USA</p>
            </div>
        </div>
        </div>
        <div class="nav-item">
        <div class="media"><span class="fas fa-headset fs-2 text-primary" data-fa-transform="down-1.5"></span>
            <div class="media-body ml-2">
            <h5 class="fs-0 mb-1">Phone Appointment</h5>
            <ul class="nav flex-column fs--1">
                <li class="nav-item"><a href="tel:5555551234">(555) 555-1234</a></li>
                <li class="nav-item"><a href="tel:5555555678">(555) 555-5678</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div><button class="navbar-toggler ml-4 z-index-1" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="true" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    </div>
</nav>
<div class="modal fade bd-example-modal-lg" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Make Appointment</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body p-4">
        <form class="zform" method="post">
            <div class="zform-feedback"></div><input class="form-control" type="hidden" name="to" value="username@domain.extension" />
            <div class="form-row">
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputName">Patient name</label><input class="form-control font-italic" id="inputName" type="text" placeholder="Enter full name" name="name" required="required" /></div>
            <div class="form-group col-md-6"><label class="font-weight-bold">Date of birth*</label>
                <div class="form-row">
                <div class="col-4"><select class="custom-select" id="inputDay" name="birthDay" required="required">
                    <option selected="selected">DD</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    </select></div>
                <div class="col-4"><select class="custom-select" id="inputMonth" name="birthMonth" required="required">
                    <option selected="selected">MM</option>
                    <option>january</option>
                    <option>february</option>
                    <option>march</option>
                    <option>April</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                    </select></div>
                <div class="col-4"><select class="custom-select" id="inputYear" name="birthYear" required="required">
                    <option selected="selected">YYYY</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                    <option>2009</option>
                    <option>2008</option>
                    <option>2007</option>
                    <option>2006</option>
                    <option>2005</option>
                    <option>2004</option>
                    <option>2003</option>
                    <option>2002</option>
                    <option>2001</option>
                    <option>2000</option>
                    <option>1999</option>
                    <option>1998</option>
                    <option>1997</option>
                    <option>1996</option>
                    <option>1995</option>
                    <option>1994</option>
                    <option>1993</option>
                    <option>1992</option>
                    <option>1991</option>
                    <option>1990</option>
                    <option>1989</option>
                    <option>1988</option>
                    <option>1987</option>
                    <option>1986</option>
                    <option>1985</option>
                    <option>1984</option>
                    <option>1983</option>
                    <option>1982</option>
                    <option>1981</option>
                    <option>1980</option>
                    <option>1979</option>
                    <option>1978</option>
                    <option>1977</option>
                    <option>1976</option>
                    <option>1975</option>
                    <option>1974</option>
                    <option>1973</option>
                    <option>1972</option>
                    <option>1971</option>
                    <option>1970</option>
                    <option>1969</option>
                    <option>1968</option>
                    <option>1967</option>
                    <option>1966</option>
                    <option>1965</option>
                    <option>1964</option>
                    <option>1963</option>
                    <option>1962</option>
                    <option>1961</option>
                    <option>1960</option>
                    <option>1959</option>
                    <option>1958</option>
                    <option>1957</option>
                    <option>1956</option>
                    <option>1955</option>
                    <option>1954</option>
                    <option>1953</option>
                    <option>1952</option>
                    <option>1951</option>
                    <option>1950</option>
                    <option>1949</option>
                    <option>1948</option>
                    <option>1947</option>
                    <option>1946</option>
                    <option>1945</option>
                    <option>1944</option>
                    <option>1943</option>
                    <option>1942</option>
                    <option>1941</option>
                    <option>1940</option>
                    <option>1939</option>
                    <option>1938</option>
                    <option>1937</option>
                    <option>1936</option>
                    <option>1935</option>
                    <option>1934</option>
                    <option>1933</option>
                    <option>1932</option>
                    <option>1931</option>
                    <option>1930</option>
                    <option>1929</option>
                    <option>1928</option>
                    <option>1927</option>
                    <option>1926</option>
                    <option>1925</option>
                    <option>1924</option>
                    <option>1923</option>
                    <option>1922</option>
                    <option>1921</option>
                    <option>1920</option>
                    <option>1919</option>
                    </select></div>
                </div>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputMail">Email</label><input class="form-control font-italic" id="inputMail" type="email" placeholder="Enter Your Enail" aria-describedby="mail" name="email" required="required" /><small class="form-text text-muted" id="mail">We'll never share your email with anyone else.</small></div>
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputNumber">Contact number</label><input class="form-control font-italic" id="inputNumber" type="tel" placeholder="Contact number" name="contactNumber" required="required" /></div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputDoc">Preferred doctor (if any)</label><input class="form-control font-italic" id="inputDoc" type="text" placeholder="Enter doctor's name" name="preferredDoctor" /></div>
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputMedical">At the following hospital</label><select class="custom-select" id="inputMedical" name="hospital">
                <option selected="">No preference </option>
                <option>Labaide Hospital</option>
                <option>Central Hospital</option>
                <option>Square Hospital</option>
                </select></div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputSpecialty">Specialty</label><select class="custom-select" id="inputSpecialty" name="speciality">
                <option selected="">I am not sure</option>
                <option>Labaide Hospital</option>
                <option>Central Hospital</option>
                <option>Square Hospital</option>
                </select></div>
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputCode">Reference code (if any)</label><input class="form-control font-italic" id="inputCode" type="number" placeholder="Enter the code" name="referenceCode" /></div>
            </div>
            <div class="form-group"><label class="font-weight-bold" for="inputAddress">Address</label><input class="form-control font-italic" id="inputAddress" type="text" placeholder="Apartment, studio, or floor" name="address" /></div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <div><label class="font-weight-bold">Gender</label></div>
                <div class="custom-control custom-radio custom-control-inline"><input class="custom-control-input" id="customRadioMale" type="radio" name="gender" required="required" /><label class="custom-control-label" for="customRadioMale">Male</label></div>
                <div class="custom-control custom-radio custom-control-inline"><input class="custom-control-input" id="customRadioFemale" type="radio" name="gender" required="required" /><label class="custom-control-label" for="customRadioFemale">Female</label></div>
            </div>
            <div class="form-group col-md-6"><label class="font-weight-bold" for="inputDate">Appointment date</label><input class="form-control" id="inputDate" type="date" name="appointmentDate" required="required" /></div>
            </div>
            <div class="form-group">
            <div class="custom-control custom-checkbox mb-3"><input class="custom-control-input" id="customControlCondition" type="checkbox" required="required" name="agree" /><label class="custom-control-label" for="customControlCondition">Confirmation and I agree with terms and conditions</label></div>
            </div>
            <div class="g-recaptcha mb-3" data-sitekey="6Lck1FAUAAAAAH3Y3wOtFAx5IjS2z_MD5WpNl4P9" data-theme="light"></div><input class="btn btn-primary" type="submit" name="submit" value="Submit" /><button class="btn btn-danger ml-2" type="button" data-dismiss="modal" aria-label="Close">Cancel</button>
        </form>
        </div>
        </div>
    </div>
</div>
