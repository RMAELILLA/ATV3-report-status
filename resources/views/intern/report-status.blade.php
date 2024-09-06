<!-- Report Status -->
@extends('layouts.layout')

@section('title', 'Report Status')

@section('content')
    <div class="p-12">
        <div class="flex items-center justify-between">
            <button id="theme-toggle" class="bg-[#475998] text-white px-6 py-2 rounded-lg font-medium">
                Toggle Theme
            </button>
            <button
                class="bg-[#475998] text-white px-6 py-2 rounded-lg font-medium dark:bg-dark-yinMn-blue dark:text-dark-white">
                Submit New Report
            </button>
        </div>
        <div class="title text-[#475998] text-center font-bold font-montserrat text-3xl pb-8 dark:text-[#5F6E82]">
            REPORT STATUS
        </div>

        <div class="head-table">
            <!-- Minimized Show Items and Search Bar -->
            <div class="pb-4 text-sm show-items font-lato">
                <span class="dark:text-[#F2F2F2]">
                    Show items:
                </span>
                <select name="show-items" id="show-items"
                    class="align-middle h-[30px] w-[94px] text-[16px] rounded-[5px] ml-[30px] font-inter bg-[#FFFFFF] pt-[4px] border-0 dark:bg-dark-white dark:text-[#F2F2F2]">
                    <option value="10">5</option>
                    <option value="25">10</option>
                    <option value="50">20</option>
                    <option value="100">30</option>
                </select>
            </div>
            <div class="pb-12">
                <div class="flex items-center pb-[30px]">
                    <div class="relative search">
                        <input type="text"
                            class="bg-white h-[50px] w-[350px] border-none pt-[9px] pr-[4px] pb-[9px] pl-[45px] rounded-lg dark:bg-[#303B47] dark:text-[#F2F2F2] dark:placeholder-[#F2F2F2]"
                            placeholder="Search">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-500 dark:text-[#F2F2F2]"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2"></circle>
                            <line x1="16.5" y1="16.5" x2="21" y2="21" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                    </div>
                    <div class="flex ml-auto space-x-4">
                        <div class="filter">
                            <select name="filter" id="filter"
                                class="bg-yinmn-blue w-[160px] h-[50px] rounded-[10px] text-white border-0 dark:bg-[#5F6E82]">
                                <option value="" class="text-black bg-white hover:bg-honey-dew">Filter</option>
                                <option value="application-id" class="text-black bg-white">Application ID</option>
                                <option value="name" class="text-black bg-white">Name</option>
                                <option value="team-name" class="text-black bg-white">Team Name</option>
                                <option value="department" class="text-black bg-white">Department</option>
                                <option value="company" class="text-black bg-white">Company</option>
                                <option value="university" class="text-black bg-white">University</option>
                                <option value="date-in" class="text-black bg-white">Date In</option>
                                <option value="time-in" class="text-black bg-white">Time In</option>
                                <option value="date-out" class="text-black bg-white">Date Out</option>
                                <option value="time-out" class="text-black bg-white">Time Out</option>
                            </select>
                        </div>
                        <div class="export">
                            <select name="export" id="export"
                                class="bg-ghost-white w-[160px] h-[50px] rounded-[10px] border-0 dark:bg-[#4A5161] dark:text-[#F2F2F2]">
                                <option value="" class="text-black bg-white hover:bg-honey-dew">Export</option>
                                <option value="excel">Excel</option>
                                <option value="csv">CSV</option>
                                <option value="pdf">PDF</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-white bg-[#475998] font-inter dark:bg-[#5F6E82] dark:text-[#F2F2F2]">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-center border-r-2 dark:border-dark-white">Report ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-center border-r-2 dark:border-dark-white">Ticket ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-center border-r-2 dark:border-dark-white">Subject</th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-center border-r-2 dark:border-dark-white">Files</th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-center border-r-2 dark:border-dark-white">Status</th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-center border-r-2 dark:border-dark-white">Date Fixed
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white dark:bg-[#303B47] even:bg-gray-50 even:dark:bg-[#47515B] border-b dark:border-gray-700 font-inter">
                                <td class="px-6 py-4 font-medium text-center text-gray-900 dark:text-white">XXXX</td>
                                <td class="px-6 py-4 text-center">XXXXXXXXXXXXXXXX</td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="cursor-pointer">Lorem ipsum dolor sit amet, consect...</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <img src="attachment-icon.png" alt="attachment" width="20" height="20">
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-4 py-1 text-white bg-orange-500 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 text-center">MM/DD/YYYY</td>
                            </tr>
                            <tr
                                class="bg-white dark:bg-[#303B47] even:bg-gray-50 even:dark:bg-[#47515B] border-b dark:border-gray-700 font-inter">
                                <td class="px-6 py-4 font-medium text-center text-gray-900 dark:text-white">XXXX</td>
                                <td class="px-6 py-4 text-center">XXXXXXXXXXXXXXXX</td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="cursor-pointer">Lorem ipsum dolor sit amet, consect...</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <img src="attachment-icon.png" alt="attachment" width="20" height="20">
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-4 py-1 text-white bg-orange-500 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 text-center">MM/DD/YYYY</td>
                            </tr>
                            <tr
                                class="bg-white dark:bg-[#303B47] even:bg-gray-50 even:dark:bg-[#47515B] border-b dark:border-gray-700 font-inter">
                                <td class="px-6 py-4 font-medium text-center text-gray-900 dark:text-white">XXXX</td>
                                <td class="px-6 py-4 text-center">XXXXXXXXXXXXXXXX</td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="cursor-pointer">Lorem ipsum dolor sit amet, consect...</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <img src="attachment-icon.png" alt="attachment" width="20" height="20">
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-4 py-1 text-white bg-orange-500 rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 text-center">MM/DD/YYYY</td>
                            </tr>
                            <!-- Add more rows as necessary -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><strong>Report ID:</strong> XXXX</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><strong>Ticket ID:</strong> XXXXXXXXXXXX</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><strong>Status:</strong> XXXXXX</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><strong>Date Fixed:</strong> MM/DD/YYYY</p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Lorem ipsum dolor sit amet, consect...
                            </h3>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Lorem ipsum odor amet, consectetuer adipiscing elit. Est turpis condimentum class ligula turpis. Magna ipsum mauris fringilla; semper augue ipsum imperdiet. Sagittis habitant sit consequat tempus sollicitudin. Eu enim tristique molestie tincidunt purus. Enim enim interdum torquent elementum tellus. Nec facilisis elementum ligula lectus cubilia sodales himenaeos convallis id. Penatibus ut dignissim eu venenatis urna egestas. Leo mauris velit lacus potenti inceptos, ante fames auctor.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Vestibulum quam dui orci dis litora. Felis suspendisse blandit sed netus cras inceptos lorem elit. Eu congue dictum platea euismod hac dis orci morbi. Vestibulum ultricies gravida nibh mi ornare sed dui augue fringilla. Primis pulvinar malesuada maecenas orci varius per pharetra. Fames mauris morbi auctor mi nullam.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Nullam nullam vulputate porttitor, himenaeos ac aliquet. Augue posuere finibus ullamcorper orci justo ipsum natoque turpis. Sagittis nam id duis platea dolor eleifend eu maximus. Parturient convallis donec natoque gravida hac sagittis laoreet. Turpis lobortis molestie ultricies vitae porta sapien augue enim? Euismod blandit proin sed a mauris. Nisi dolor habitant taciti nunc; porttitor porta ultrices.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Gravida elit eget phasellus primis interdum. Nibh tincidunt tellus erat finibus tempor. Id quisque ultricies erat consequat nascetur mauris augue ultricies a. At et nec pretium quam in etiam aenean sociosqu. Euismod sollicitudin purus eget libero ante, eros dolor etiam. In purus neque rutrum luctus orci pharetra mauris. Quis porta senectus sit at cubilia vivamus congue euismod? Curae pretium netus sagittis erat non vehicula quam. Cras aliquam adipiscing commodo litora velit suscipit metus ridiculus.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Massa proin ac; tempor montes eleifend hac quam integer justo. Neque curae lorem mattis aliquam placerat suspendisse. Pretium ut lacinia fermentum diam hendrerit id lobortis. Libero id aenean est, pharetra nullam ultricies morbi? Dapibus vehicula aliquam amet lacus ex lacinia sapien posuere et. Diam vel faucibus; taciti fames luctus mauris. Vitae donec natoque nisi duis magna auctor dictum viverra. Auctor tristique massa magnis congue eu dapibus. Tempor class pharetra habitasse ultrices tellus.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="default-modal" type="button" class="bg-yinmn-blue w-24 h-10 rounded-[10px] text-white border-0 dark:bg-[#5F6E82]">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center justify-between pt-12">
                <button class="w-24 h-10 bg-white rounded-lg dark:bg-[#303B47] dark:text-[#F2F2F2]">Previous</button>
                <div class="dark:text-[#F2F2F2]">
                    Page <span>1</span> of <span>10</span>
                </div>
                <button class="w-24 h-10 bg-white rounded-lg dark:bg-[#303B47] dark:text-[#F2F2F2]">Next</button>
            </div>
        </div>

        <script>
            const themeToggleBtn = document.getElementById('theme-toggle');
            themeToggleBtn.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
            });
        </script>
    @endsection
