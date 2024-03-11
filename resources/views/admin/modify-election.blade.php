<x-master-admin>

    <body>

        <!-- container section start -->
        <section id="container" class="">
            <!--header start-->
            <!--main content start-->
            <section id="main-content" style=" margin-right:110px;">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Modify Election</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i>Home</li>
                                <li><i class="icon_document_alt"></i>Election</li>
                                <li><i class="fa fa-file-text-o"></i>Modify Election</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Election
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal " method="POST" action="modify_election">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Election ID</label>
                                            <div class="col-sm-10">
                                                <select name="eno" required class="form-control round-input"
                                                    style="width:80%;">
                                                    {{-- {% for i in elections %}
                                                    <option value="{{ i . election_id }}">{{ i . election_id }}</option>
                                                    {% endfor %} --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Election Type</label>
                                            <div class="col-sm-10">
                                                <select name="etype" required class="form-control round-input"
                                                    style="width:80%;">
                                                    {{-- {% for i in elections %}
                                                    <option value="{{ i . election_type }}">{{ i . election_type }}</option>
                                                    {% endfor %} --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">State</label>
                                            <div class="col-sm-10">
                                                <select name="state" class="form-control round-input"
                                                    style="width:80%;">
                                                    {{-- {% for i in elections %}
                                                    <option>{{ i . state }}</option>
                                                    {% endfor %} --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Start Date</label>
                                            <div class="col-sm-10">
                                                {{-- {% for i in elections %}
                                                <input type="date" name="sdate" value="{{ i . start_date }}"
                                                    readonly class="form-control round-input" style="width:80%;">
                                                {% endfor %} --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Start Time</label>
                                            <div class="col-sm-10">
                                                {{-- {% for i in elections %}
                                                <input type="time" name="stime" value="{{ i . start_time }}"
                                                    readonly class="form-control round-input" style="width:80%;">
                                                {% endfor %} --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">End Date</label>
                                            <div class="col-sm-10">
                                                {{-- {% for i in elections %}
                                                <input type="date" name="edate" value="{{ i . end_date }}"
                                                    class="form-control round-input" style="width:80%;">
                                                {% endfor %} --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">End Time</label>
                                            <div class="col-sm-10">
                                                {{-- {% for i in elections %}
                                                <input type="time" name="etime" value="{{ i . end_time }}"
                                                    class="form-control round-input" style="width:80%;">
                                                {% endfor %} --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Modify Election</button>
                                                <button class="btn btn-default" type="reset">Reset</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{-- <div class="col-lg-offset-2 col-lg-10">
                                                {% for message in messages %}
                                                <h3> {{ message }} </h3>
                                                {% endfor %}
                                            </div> --}}
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </body>
</x-master-admin>
