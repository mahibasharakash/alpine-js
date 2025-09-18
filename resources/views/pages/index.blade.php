@extends('layout.layout')

@section('title', 'Crud Project')

@section('content')

    <div x-data="crudApp()" class="p-6 max-w-3xl mx-auto">

        <!-- Form -->
        <div class="mb-3">
            <form @submit.prevent="manageItem" class="flex gap-2">
                <input type="text" x-model="formData.name" placeholder="Enter name" class="px-5 text-sm border border-gray-200 bg-gray-200 p-2 rounded-lg w-full outline-0 duration-500 ring-0 focus:ring-2 focus:ring-blue-500" />
                <button type="submit" class="text-sm bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                    Add
                </button>
            </form>
        </div>

        <!-- Table -->
        <table class="table-auto w-full border border-gray-200">
            <thead class="border border-gray-200">
                <tr>
                    <th class="p-3"> # </th>
                    <th class="p-3"> Name </th>
                    <th class="p-3"> Action </th>
                </tr>
            </thead>
            <tbody>
                <template x-if="items.length > 0">
                    <tr x-for="(item, index) in items" :key="index" class="border border-gray-200">
                        <td class="p-3" x-html="item.id"></td>
                        <td class="p-3" x-html="item.name"></td>
                        <td class="p-3 flex justify-end items-center gap-3">
                            <a href="javascript:void(0)" class="decoration-0 text-sm text-gray-500"> Edit </a>
                            <a href="javascript:void(0)" class="decoration-0 text-sm text-red-500"> Delete </a>
                        </td>
                    </tr>
                </template>
                <template x-if="items.length === 0">
                    <tr>
                        <td colspan="3" class="p-3 text-center text-gray-500">No items found.</td>
                    </tr>
                </template>
            </tbody>
        </table>

    </div>

    <script>

        function crudApp() {

            return {

                formData: {
                    name: ''
                },

                items: [],

                manageItem() {
                    console.log(this.formData.name)
                }

            }

        }

    </script>

@endsection
