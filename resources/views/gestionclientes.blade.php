@extends('layouts.interface')
@section('CSS')
<!--
Aquí linkearás el CSS generado por SASS
<link rel="stylesheet" href="css/example.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="wrapper-editor">
        <div class="row d-flex justify-content-center modalWrapper">
            <div class="modal fade addNewInputs" id="modalAdd15" tabindex="-1" role="dialog" aria-labelledby="modalAdd15"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Agregar</h4>
                            <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 modal-add-inputs">
                            <div class="md-form mb-5">
                                <input type="text" id="inputName15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputName15">Nombre</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputPosition15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputPosition15">Apellidos</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="date" id="inputDate" class="form-control" placeholder="Select Date">
                                <label data-error="wrong" data-success="right" for="inputDate15">Fecha de Nacimiento</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputOfficeInput15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputOfficeInput15">CURP</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputAge15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputAge15">RFC</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="inputAge15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="inputAge15">Direccion</label>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                            <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Confirmar
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd15">Agregar<i
                            class="fas fa-plus-square ml-1"></i></a>
            </div>
            <div class="modal fade modalEditClass" id="modalEdit15" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Confirmar</h4>
                            <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3 modal-inputs">
                            <div class="md-form mb-5">
                                <input type="text" id="formNameEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formNameEdit15">Name</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formPositionEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formPositionEdit15">Position</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formOfficeEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formOfficeEdit15">Office</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formAgeEdit15" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="formAgeEdit15">Age</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formDateEdit" class="form-control datepicker">
                                <label data-error="wrong" data-success="right" for="formDateEdit15">Date</label>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center editInsideWrapper">
                            <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Editar
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center buttonEditWrapper">
                <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit15"
                        disabled>Editar<i class="fas fa-pen-square ml-1"></i></button>
            </div>
            <div class="modal fade" id="modalDelete15" tabindex="-1" role="dialog" aria-labelledby="modalDelete15"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Eliminar</h4>
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <p class="text-center h4">Estas seguro de eliminar el renglon?</p>
                        </div>
                        <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
                            <button type="button" class="btn btn-outline-danger btnYesClass" id="btnYes15" data-dismiss="modal">Si
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btnNoClass" id="btnNo15" data-dismiss="modal">No
                                <i class="far fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal" disabled data-target="#modalDelete15"
                        disabled>Eliminar<i class="fas fa-times ml-1"></i></button>
            </div>
        </div>
        <div class="table-responsive">
             <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nombre
                </th>
                <th class="th-sm">Apellidos
                </th>
                <th class="th-sm">Fecha de Nacimiento
                </th>
                <th class="th-sm">CURP
                </th>
                <th class="th-sm">RFC
                </th>
                <th class="th-sm">Direccion
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>Av. colon</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>Av. colon</td>
            </tr>

            </tbody>

        </table>
        </div>
    </div>
<!--
Esta es la sección principal donde incluirás tu trabajo.

El contenido esta por debajo del Navbar de la plantilla y
esta dentro de un <div class="container-fluid mt-4" id="container">
-->
@endsection


@section('JS')
    <script type="text/javascript"> //dtBasicExample
        $(document).ready(function() {
            var table = $('#dtBasicExample').DataTable( {
                dom: 'Bfrtip',
                select: true
            } );
        } );
        $('#dtBasicExample').mdbEditor({
            mdbEditor: true
        });
    </script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<!--
Puedes añadir código JavaScript y librerías.

Tu código aquí no afectará el trabajo de los demás
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
</script>
-->
@endsection
