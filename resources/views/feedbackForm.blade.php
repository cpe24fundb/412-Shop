@extends('layouts.app')

@section('content') 
    <div class="row justify-content-md-center">
        <div class="col-sm-10 col-md-9">
            <h1 class="mt-3">Feedback</h1>
        </div>
    </div>
    <form>
    <div class="row justify-content-md-center">
            <div class="col-sm-10 col-md-9">
                <label for="nameInputField">Name</label>
                <input type="email" class="form-control" id="nameInputField" aria-describedby="emailHelp" placeholder="Name">

                <div class="form-group">
                    <label for="commentFormField">Comment</label>
                    <textarea class="form-control" id="commentFormField" rows="4"></textarea>
                </div>
            </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
            <button type="reset" class="btn btn-secondary" onclick="clearFields()" value="Reset">Reset</button>
        </div>
    </div>
    </form>

@endsection