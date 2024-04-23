@extends('admin.layouts.app')

@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card b-radius--10 ">
            <div class="card-body p-0">
                <div class="table-responsive--md  table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>@lang('Action')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($features as $feature)
                                <tr>
                                    <td>
                                        <span class="fw-bold">{{ $feature->title }}</span>
                                    </td>

                                    <td>
                                        <span>{{ $feature->serviceCategory->name }}</span>
                                    </td>


                                    <td>
                                        <div class="button--group">
                                                <button class="btn btn-sm btn-outline--primary editBtn" data-data="{{ $feature }}">
                                                    <i class="la la-pencil"></i> @lang('Edit')
                                                </button>



                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table><!-- table end -->
                </div>
            </div>
            {{-- @if ($categories->hasPages())
                <div class="card-footer py-4">
                    {{ paginateLinks($categories) }}
                </div>
            @endif --}}
        </div>
    </div>
</div>

<x-confirmation-modal />

{{-- NEW MODAL --}}
<div id="createModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">New Feature</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
            </div>
            <form class="form-horizontal" method="post" action="{{ route('admin.features.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" required value="{{old('title')}}" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="service_category_id">Service Category</label>
                        <select class="form-control" id="service_category_id" name="service_category_id">
                            @foreach($serviceCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('SVG Code')</label>
                        <textarea name="svg" class="form-control" rows="4" required>{{old('svg')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>@lang('Short Description')</label>
                        <textarea name="description" class="form-control" rows="4" required>{{old('description')}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- EDIT MODAL --}}
<div id="editModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Update Feature</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="las la-times"></i>
                </button>
            </div>
            @foreach($features as $feature)
            <form class="form-horizontal" method="post" action="{{ route('admin.features.update', ['feature' => $feature->id]) }}">
                @csrf
                <input type="hidden" name="id" required>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="service_category_id">Service Category</label>
                        <select class="form-control" id="service_category_id" name="service_category_id">
                            @foreach($serviceCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('SVG Code')</label>
                        <textarea name="svg" class="form-control" required rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>@lang('Short Description')</label>
                        <textarea name="description" class="form-control" required rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection

@permit('admin.features.create')
    @push('breadcrumb-plugins')
        <button class="btn btn-sm btn-outline--primary addBtn">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endpush
@endpermit

@push('script')
    <script>
        (function($){
            "use strict";

            var slugRule = /^[0-9a-zA-Z -]+$/;

            $('.addBtn').on('click', function () {
                var modal = $('#createModal');
                modal.modal('show');
            });

            $('.editBtn').on('click', function () {
                var modal = $('#editModal');
                var record = $(this).data('data');
                $('.editSlugValidatation').addClass('d-none').removeClass('d-inline');

                modal.find('input[name=id]').val(record.id);
                modal.find('input[name=title]').val(record.title);
                modal.find('textarea[name=svg]').val(record.svg);
                modal.find('textarea[name=description]').val(record.description);

                modal.modal('show');
            });




        })(jQuery);
    </script>
@endpush

@push('style')
<style>
    .addUrl span, .editUrl span{
        border-bottom: 1px dashed;
    }
    .addUrl, .editUrl{
        font-weight: 500 !important;
    }
</style>
@endpush

