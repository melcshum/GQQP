@extends('layouts.app')

@section('content')

    <div id="page-wrapper">
        <div class="row-fluid">
            <div class="col-md-10 col-sm-10 col-xs-10">

                <select id="question-list" onChange="getQuestion(this.value);">
                    <option value="">Types</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <table class="table table-bordered table-hover">
                    <thead>
                        <th>Question_ID</th>
                        <th>Question_type</th>
                        <th>Question_Creator</th>
                    </thead>

                    <tbody>
                        <?php
                            foreach($data as $row){
                        ?>
                        <tr>
                            <td><?php echo $row->question_id ?></td>
                            <td><?php echo $row->question_type ?></td>
                            <td><?php echo $row->user_id ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection