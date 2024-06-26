<x-master-admin>

    <body>
        <section id="main-content" style=" margin-right:110px;">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>View Result</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i>Home</li>
                            <li><i class="icon_document_alt"></i>Result</li>
                            <li><i class="fa fa-file-text-o"></i>View Result</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Result
                            </header>
                            <div class="panel-body">
                                <form class="form-horizontal" action="view_result" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Election ID</label>
                                        <div class="col-sm-10">
                                            <select name="e_id" class="form-control round-input" style="width:80%;">
                                                <option value="" selected>Select Election ID</option>
                                                {{-- {% for i in elections %}
                                  <option value="{{i.election_id}}">{{i.election_id}}</option>
                              {% endfor %} --}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Result Type</label>
                                        <div class="col-sm-10">
                                            <select name="resulttype" class="form-control round-input"
                                                style="width:80%;" required>
                                                <option value="" selected>Select Result Type</option>
                                                <option value="partywise">Partywise</option>
                                                <option value="constituencywise">Constituencywise</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" name="view_result" type="submit">View
                                                Result</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </section>
    </body>
</x-master-admin>
