<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-white.png') }}">
        <title>Next Chapter</title>
        @vite(['resources/css/app.css', 'resources/js/teacher.js', 'resources/js/tailwind.js'])
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
        <style>
            /* Styles pour CKEditor */
            .ck-editor__editable {
                min-height: 200px;
                max-height: 400px;
            }
            .ck-content {
                font-size: 1rem;
            }
            /* Assurer que l'éditeur s'adapte à la largeur du conteneur */
            .ck.ck-editor {
                width: 100%;
            }
        </style>
    </head>
    <body class="grid grid-cols-20">
        <nav class="flex flex-col justify-between items-center bg-[#222] h-screen py-5 shadow-sm ">
            <div class="flex flex-col gap-2 w-full items-center justify-center">
                <div class="mb-8">
                    <img src="{{ asset('storage/images/logo-white.png') }}" class="h-10">
                </div>
                <a href="{{ route('teacher.dashboard') }}" class="flex justify-center w-full  py-2">
                    <svg height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                        <path fill="#FFF" d="M9.037,40.763h4.286c0.552,0,1-0.447,1-1v-7.314c0-0.553-0.448-1-1-1H9.037c-0.552,0-1,0.447-1,1v7.314
                            C8.037,40.315,8.485,40.763,9.037,40.763z M10.037,33.448h2.286v5.314h-2.286V33.448z"/>
                        <path fill="#FFF" d="M21.894,40.763c0.552,0,1-0.447,1-1v-20.64c0-0.553-0.448-1-1-1h-4.286c-0.552,0-1,0.447-1,1v20.64
                            c0,0.553,0.448,1,1,1H21.894z M18.608,20.123h2.286v18.64h-2.286V20.123z"/>
                        <path fill="#FFF" d="M30.465,40.763c0.552,0,1-0.447,1-1V25.96c0-0.553-0.448-1-1-1H26.18c-0.552,0-1,0.447-1,1v13.803
                            c0,0.553,0.448,1,1,1H30.465z M27.18,26.96h2.286v11.803H27.18V26.96z"/>
                        <path fill="#FFF" d="M33.751,9.763v30c0,0.553,0.448,1,1,1h4.286c0.552,0,1-0.447,1-1v-30c0-0.553-0.448-1-1-1h-4.286
                            C34.199,8.763,33.751,9.21,33.751,9.763z M35.751,10.763h2.286v28h-2.286V10.763z"/>
                    </svg>
                </a>
                <a href="{{ route('teacher.courses') }}" class="flex justify-center bg-[#D6FF40] rounded-none py-2 flex-1 w-full">
                    <svg fill="#222" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="30px" height="30px" viewBox="0 0 335.08 335.079" style="enable-background:new 0 0 335.08 335.079;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path d="M311.175,115.775c-1.355-10.186-1.546-27.73,7.915-33.621c0.169-0.108,0.295-0.264,0.443-0.398
                                    c7.735-2.474,13.088-5.946,8.886-10.618l-114.102-34.38L29.56,62.445c0,0-21.157,3.024-19.267,35.894
                                    c1.026,17.89,6.637,26.676,11.544,31l-15.161,4.569c-4.208,4.672,1.144,8.145,8.88,10.615c0.147,0.138,0.271,0.293,0.443,0.401
                                    c9.455,5.896,9.273,23.438,7.913,33.626c-33.967,9.645-21.774,12.788-21.774,12.788l7.451,1.803
                                    c-5.241,4.736-10.446,13.717-9.471,30.75c1.891,32.864,19.269,35.132,19.269,35.132l120.904,39.298l182.49-44.202
                                    c0,0,12.197-3.148-21.779-12.794c-1.366-10.172-1.556-27.712,7.921-33.623c0.174-0.105,0.301-0.264,0.442-0.396
                                    c7.736-2.474,13.084-5.943,8.881-10.615l-7.932-2.395c5.29-3.19,13.236-11.527,14.481-33.183
                                    c0.859-14.896-3.027-23.62-7.525-28.756l15.678-3.794C332.949,128.569,345.146,125.421,311.175,115.775z M158.533,115.354
                                    l30.688-6.307l103.708-21.312l15.451-3.178c-4.937,9.036-4.73,21.402-3.913,29.35c0.179,1.798,0.385,3.44,0.585,4.688
                                    L288.14,122.8l-130.897,32.563L158.533,115.354z M26.71,147.337l15.449,3.178l99.597,20.474l8.701,1.782l0,0l0,0l26.093,5.363
                                    l1.287,40.01L43.303,184.673l-13.263-3.296c0.195-1.25,0.401-2.89,0.588-4.693C31.44,168.742,31.651,156.373,26.71,147.337z
                                    M20.708,96.757c-0.187-8.743,1.371-15.066,4.52-18.28c2.004-2.052,4.369-2.479,5.991-2.479c0.857,0,1.474,0.119,1.516,0.119
                                    l79.607,25.953l39.717,12.949l-1.303,40.289L39.334,124.07l-5.88-1.647c-0.216-0.061-0.509-0.103-0.735-0.113
                                    C32.26,122.277,21.244,121.263,20.708,96.757z M140.579,280.866L23.28,247.98c-0.217-0.063-0.507-0.105-0.733-0.116
                                    c-0.467-0.031-11.488-1.044-12.021-25.544c-0.19-8.754,1.376-15.071,4.519-18.288c2.009-2.052,4.375-2.479,5.994-2.479
                                    c0.859,0,1.474,0.115,1.519,0.115c0,0,0.005,0,0,0l119.316,38.908L140.579,280.866z M294.284,239.459
                                    c0.185,1.804,0.391,3.443,0.591,4.693l-147.812,36.771l1.292-40.01l31.601-6.497l4.667,1.129l17.492-5.685l80.631-16.569
                                    l15.457-3.18C293.261,219.146,293.466,231.517,294.284,239.459z M302.426,185.084c-0.269,0.006-0.538,0.042-0.791,0.122
                                    l-11.148,3.121l-106.148,29.764l-1.298-40.289l34.826-11.359l84.327-27.501c0.011-0.005,4.436-0.988,7.684,2.315
                                    c3.144,3.214,4.704,9.537,4.52,18.28C313.848,184.035,302.827,185.053,302.426,185.084z"/>
                            </g>
                        </g>
                    </svg>
                </a>
                <a href="{{ route('teacher.students') }}" class="flex justify-center rounded-none py-2 flex-1 w-full">
                    <svg fill="#FFF" width="30px" height="30px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                        <path d="M226.52979,56.41016l-96-32a8.00672,8.00672,0,0,0-5.05958,0L29.6239,56.35889l-.00976.00341-.14393.04786c-.02819.00927-.053.02465-.08105.03442a7.91407,7.91407,0,0,0-1.01074.42871c-.03748.019-.07642.03516-.11353.05469a7.97333,7.97333,0,0,0-.93139.58325c-.06543.04688-.129.09522-.19288.144a8.08459,8.08459,0,0,0-.81872.71119c-.0238.02416-.04443.05053-.06787.0747a8.0222,8.0222,0,0,0-.661.783c-.04163.05567-.08472.10986-.12476.16675a8.00177,8.00177,0,0,0-.56714.92993c-.02588.04981-.04809.10083-.073.15112a7.97024,7.97024,0,0,0-.40515.97608c-.01062.03149-.0238.06128-.03405.093a7.95058,7.95058,0,0,0-.26282,1.08544c-.01331.07666-.02405.15308-.035.23A8.02888,8.02888,0,0,0,24,64v80a8,8,0,0,0,16,0V75.09985L73.58521,86.29492a63.9717,63.9717,0,0,0,20.42944,87.89746,95.88087,95.88087,0,0,0-46.48389,37.4375,7.9997,7.9997,0,1,0,13.40235,8.73828,80.023,80.023,0,0,1,134.1333,0,7.99969,7.99969,0,1,0,13.40234-8.73828,95.87941,95.87941,0,0,0-46.4834-37.43725,63.972,63.972,0,0,0,20.42944-87.89771l44.115-14.70508a8.0005,8.0005,0,0,0,0-15.17968ZM128,168A47.99154,47.99154,0,0,1,89.34875,91.54932l36.12146,12.04052a8.00672,8.00672,0,0,0,5.05958,0l36.12146-12.04052A47.99154,47.99154,0,0,1,128,168Z"/>
                    </svg>
                </a>
                <a href="{{ route('teacher.profile') }}" class="flex justify-center rounded-none py-2 flex-1 w-full">
                    <svg fill="#FFF" width="30px" height="30px" viewBox="0 0 512 512" id="_x30_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M256,90  c37.02,0,67.031,35.468,67.031,79.219S293.02,248.438,256,248.438s-67.031-35.468-67.031-79.219S218.98,90,256,90z M369.46,402  H142.54c-11.378,0-20.602-9.224-20.602-20.602C121.938,328.159,181.959,285,256,285s134.062,43.159,134.062,96.398  C390.062,392.776,380.839,402,369.46,402z"/></svg>
                </a>
            </div>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button class="transition-all ease-in-out duration-300 hover:scale-105 cursor-pointer">
                    <svg width="20px" height="20px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                        <path d="M23.9917 6L6 6L6 42H24" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M33 33L42 24L33 15" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 23.9917H42" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
        </nav>
        <section class="col-span-19 flex flex-col gap-5 h-screen overflow-auto px-5 pt-5">
            <div class="flex items-center justify-between">
                <h1 class="font-semibold text-2xl">Add New Course</h1>
                <div>
                    @php
                        $photo = Auth::user()->photo ;
                    @endphp
                    <img src="{{ asset('storage/'.$photo) }}" class="w-10 rounded-full">
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <div class="flex items-center justify-between pt-5">
                    <p class="text-gray-600 text-sm font-light">Complete Your Course Here bu Adding Chapters and Parts ...</p>
                </div>
                <div class="flex gap-5 my-5 p-4 bg-[#222] shadow-sm rounded-md w-max">
                    <img src="{{ asset('storage/'. $course->cover) }}" class="w-40 rounded-md">
                    <div class="flex flex-col justify-between gap-5">
                        <h1 class="text-lg font-semibold text-[#D6FF40]">{{ $course->title }}</h1>
                        <p class="text-white font-light text-xs">{{ $course->description }}</p>
                        <div class="flex gap-5">
                            <div class="flex items-center gap-2">
                                <svg height="15px" width="15px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 305 305" xml:space="preserve" fill="#FFF">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier"> 
                                        <g> 
                                            <path style="fill:#FFF;" d="M305,173.726c0-41.662-16.799-79.469-43.972-107.02c-0.212-0.282-0.438-0.558-0.695-0.815 c-0.257-0.257-0.532-0.483-0.814-0.694C231.968,38.024,194.161,21.226,152.5,21.226c-41.661,0-79.468,16.799-107.02,43.971 c-0.282,0.212-0.557,0.438-0.814,0.694c-0.257,0.257-0.483,0.532-0.695,0.815C16.799,94.257,0,132.064,0,173.726 c0,40.729,15.859,79.018,44.655,107.821c0.004,0.004,0.008,0.009,0.012,0.013c0.003,0.002,0.005,0.005,0.008,0.007 c0.004,0.004,0.008,0.008,0.012,0.012c1.464,1.464,3.383,2.195,5.302,2.195c1.92,0,3.84-0.732,5.304-2.197 c0.125-0.125,0.238-0.258,0.352-0.39l23.112-23.113c2.929-2.93,2.929-7.678,0-10.607c-2.929-2.928-7.678-2.928-10.606,0 l-18.036,18.036c-21.031-23.403-33.232-52.857-34.91-84.277h25.507c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H15.207 c1.744-32.272,14.668-61.618,34.957-84.229l17.987,17.987c1.464,1.464,3.384,2.196,5.303,2.196c1.919,0,3.839-0.732,5.303-2.196 c2.929-2.93,2.929-7.678,0-10.607L60.771,71.389C83.383,51.1,112.728,38.176,145,36.433v25.506c0,4.143,3.358,7.5,7.5,7.5 s7.5-3.357,7.5-7.5V36.433c32.272,1.743,61.617,14.668,84.229,34.957l-17.987,17.987c-2.929,2.93-2.929,7.678,0,10.607 c1.464,1.464,3.384,2.196,5.303,2.196s3.839-0.732,5.303-2.196l17.987-17.987c20.289,22.612,33.214,51.957,34.957,84.229h-25.506 c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h25.507c-1.678,31.42-13.878,60.875-34.909,84.278l-18.036-18.037 c-2.928-2.928-7.677-2.928-10.606,0c-2.929,2.93-2.929,7.678,0,10.607l23.485,23.485c1.464,1.464,3.384,2.196,5.303,2.196 c0.959,0,1.919-0.183,2.822-0.549c0.903-0.366,1.749-0.915,2.482-1.647C289.137,252.755,305,214.459,305,173.726z"></path> 
                                            <path style="fill:#FFF;" d="M186.956,87.718c-3.847-1.541-8.211,0.327-9.751,4.173l-21.673,54.1 c-1.01-0.108-2.02-0.182-3.031-0.182c-10.556,0-20.091,5.847-24.886,15.259c-5.012,9.839-3.728,21.595,3.432,31.445 c0.732,1.007,1.652,1.928,2.666,2.665c5.817,4.229,12.314,6.464,18.788,6.464c10.556,0,20.092-5.847,24.886-15.259 c5.012-9.839,3.728-21.594-3.427-31.437c-0.732-1.01-1.654-1.934-2.671-2.674c-0.547-0.398-1.106-0.761-1.665-1.123l21.505-53.681 C192.669,93.624,190.801,89.258,186.956,87.718z M164.02,179.574c-2.221,4.359-6.635,7.067-11.52,7.067 c-3.204,0-6.429-1.119-9.589-3.327c-3.6-5.169-4.307-10.773-1.93-15.438c2.22-4.359,6.634-7.067,11.52-7.067 c1.558,0,3.12,0.27,4.678,0.795c0.051,0.021,0.098,0.048,0.15,0.069c0.164,0.065,0.329,0.118,0.494,0.171 c1.43,0.549,2.854,1.305,4.266,2.291C165.688,169.304,166.396,174.909,164.02,179.574z"></path> 
                                        </g>
                                    </g>
                                </svg>
                                <span class="text-xs text-white font-light">{{ ucfirst($course->level) }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="15px" height="15px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M7.50009 0.877014C3.84241 0.877014 0.877258 3.84216 0.877258 7.49984C0.877258 11.1575 3.8424 14.1227 7.50009 14.1227C11.1578 14.1227 14.1229 11.1575 14.1229 7.49984C14.1229 3.84216 11.1577 0.877014 7.50009 0.877014ZM1.82726 7.49984C1.82726 4.36683 4.36708 1.82701 7.50009 1.82701C10.6331 1.82701 13.1729 4.36683 13.1729 7.49984C13.1729 10.6328 10.6331 13.1727 7.50009 13.1727C4.36708 13.1727 1.82726 10.6328 1.82726 7.49984ZM8 4.50001C8 4.22387 7.77614 4.00001 7.5 4.00001C7.22386 4.00001 7 4.22387 7 4.50001V7.50001C7 7.63262 7.05268 7.7598 7.14645 7.85357L9.14645 9.85357C9.34171 10.0488 9.65829 10.0488 9.85355 9.85357C10.0488 9.65831 10.0488 9.34172 9.85355 9.14646L8 7.29291V4.50001Z"
                                      fill="#FFF"
                                    />
                                </svg>
                                <span class="text-xs text-white font-light">{{ $course->duration }} hours</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-10 bg-white rounded-md shadow-sm my-5">
                    <form action="" class="col-span-3">
                        <div id="chapters-container">
                            <!-- Premier chapitre -->
                            <div class="chapter-form mb-8 border-b pb-6">
                                <div class="mb-4">
                                    <label for="chapter-title-0" class="block text-sm font-medium text-gray-700 mb-1">Chapter Title</label>
                                    <input type="text" name="chapters[0][title]" id="chapter-title-0" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div class="parts-container">
                                    <!-- Première partie -->
                                    <div class="part-form bg-gray-50 p-4 rounded-md mb-4">
                                        <div class="mb-3">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Part Title</label>
                                            <input type="text" name="chapters[0][parts][0][title]" class="part-title w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        </div>
                                        <div class="mb-3">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Part Content</label>
                                            <div class="ckeditor-container">
                                                <div class="editor" id="editor-0-0"></div>
                                                <input type="hidden" name="chapters[0][parts][0][content]" class="editor-content">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="button" class="add-part-btn mt-2 flex items-center cursor-pointer transition-all ease-in-out duration-300 border border-gray-800 py-2 px-10 rounded-md hover:bg-[#D6FF40] hover:border-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                    Add New Part
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex justify-between">
                            <button type="button" id="add-chapter-btn" class="mt-2 flex items-center cursor-pointer py-2 px-10 bg-[#D6FF40] rounded-md transition-all ease-in-out duration-300 hover:scale-105 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                Add New Chapter
                            </button>
                            
                            <button type="submit" id="submit-form-btn" class="cursor-pointer px-10 py-1 bg-[#222] text-white rounded-md transition-all ease-in-out duration-300 hover:bg-[#303030]">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let chapterCount = 1;
                // Stockage des instances CKEditor
                const editorInstances = {};
                
                // Initialiser le premier éditeur
                initCKEditor('editor-0-0');
                
                // Fonction pour initialiser CKEditor
                function initCKEditor(editorId) {
                    const editorElement = document.getElementById(editorId);
                    if (!editorElement) return;
                    
                    ClassicEditor
                        .create(editorElement, {
                            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'blockQuote', 'insertTable', 'undo', 'redo'],
                            placeholder: 'Saisissez le contenu de cette partie...'
                        })
                        .then(editor => {
                            editorInstances[editorId] = editor;
                            
                            // Mettre à jour le champ caché lorsque le contenu change
                            editor.model.document.on('change:data', () => {
                                const hiddenInput = editorElement.closest('.ckeditor-container').querySelector('.editor-content');
                                hiddenInput.value = editor.getData();
                            });
                        })
                        .catch(error => {
                            console.error(error);
                        });
                }
                
                // Fonction pour mettre à jour les noms des champs
                function updateFieldNames() {
                    const chapters = document.querySelectorAll('.chapter-form');
                    
                    chapters.forEach((chapter, chapterIndex) => {
                        // Mettre à jour le nom du champ de titre du chapitre
                        const chapterTitleInput = chapter.querySelector('input[id^="chapter-title"]');
                        chapterTitleInput.name = `chapters[${chapterIndex}][title]`;
                        chapterTitleInput.id = `chapter-title-${chapterIndex}`;
                        
                        // Mettre à jour les noms des champs des parties
                        const parts = chapter.querySelectorAll('.part-form');
                        parts.forEach((part, partIndex) => {
                            const titleInput = part.querySelector('.part-title');
                            const contentInput = part.querySelector('.editor-content');
                            const editorDiv = part.querySelector('.editor');
                            
                            titleInput.name = `chapters[${chapterIndex}][parts][${partIndex}][title]`;
                            contentInput.name = `chapters[${chapterIndex}][parts][${partIndex}][content]`;
                            
                            // Mettre à jour l'ID de l'éditeur si nécessaire
                            const newEditorId = `editor-${chapterIndex}-${partIndex}`;
                            if (editorDiv && editorDiv.id !== newEditorId) {
                                // Si l'instance d'éditeur existe, la détruire
                                if (editorInstances[editorDiv.id]) {
                                    editorInstances[editorDiv.id].destroy()
                                        .then(() => {
                                            delete editorInstances[editorDiv.id];
                                        })
                                        .catch(error => {
                                            console.error('Erreur lors de la destruction de l\'éditeur:', error);
                                        });
                                }
                                
                                editorDiv.id = newEditorId;
                                // Initialiser le nouvel éditeur
                                initCKEditor(newEditorId);
                            }
                        });
                    });
                }
                
                // Ajouter une partie
                document.addEventListener('click', function(e) {
                    if (e.target.closest('.add-part-btn')) {
                        const chapterForm = e.target.closest('.chapter-form');
                        const partsContainer = chapterForm.querySelector('.parts-container');
                        const chapterIndex = Array.from(document.querySelectorAll('.chapter-form')).indexOf(chapterForm);
                        const partIndex = partsContainer.querySelectorAll('.part-form').length;
                        const newEditorId = `editor-${chapterIndex}-${partIndex}`;
                        
                        const newPartForm = document.createElement('div');
                        newPartForm.className = 'part-form bg-gray-50 p-4 rounded-md mb-4';
                        newPartForm.innerHTML = `
                            <div class="flex justify-between items-center mb-2">
                                <h4 class="text-sm font-medium text-gray-700">Nouvelle Partie</h4>
                                <button type="button" class="remove-part-btn text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mb-3">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Titre de la Partie</label>
                                <input type="text" name="chapters[${chapterIndex}][parts][${partIndex}][title]" class="part-title w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-3">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Contenu de la Partie</label>
                                <div class="ckeditor-container">
                                    <div class="editor" id="${newEditorId}"></div>
                                    <input type="hidden" name="chapters[${chapterIndex}][parts][${partIndex}][content]" class="editor-content">
                                </div>
                            </div>
                        `;
                        
                        partsContainer.appendChild(newPartForm);
                        initCKEditor(newEditorId);
                        updateFieldNames();
                    }
                });
                
                // Supprimer une partie
                document.addEventListener('click', function(e) {
                    if (e.target.closest('.remove-part-btn')) {
                        const partForm = e.target.closest('.part-form');
                        const editorDiv = partForm.querySelector('.editor');
                        
                        // Détruire l'instance CKEditor avant de supprimer le DOM
                        if (editorDiv && editorInstances[editorDiv.id]) {
                            editorInstances[editorDiv.id].destroy()
                                .then(() => {
                                    delete editorInstances[editorDiv.id];
                                    partForm.remove();
                                    updateFieldNames();
                                })
                                .catch(error => {
                                    console.error('Erreur lors de la destruction de l\'éditeur:', error);
                                    partForm.remove();
                                    updateFieldNames();
                                });
                        } else {
                            partForm.remove();
                            updateFieldNames();
                        }
                    }
                });
                
                // Ajouter un nouveau chapitre
                document.getElementById('add-chapter-btn').addEventListener('click', function() {
                    const chaptersContainer = document.getElementById('chapters-container');
                    const newEditorId = `editor-${chapterCount}-0`;
                    
                    const newChapterForm = document.createElement('div');
                    newChapterForm.className = 'chapter-form mb-8 border-b pb-6';
                    newChapterForm.innerHTML = `
                        <div class="flex justify-between items-center mb-4">
                            <label for="chapter-title-${chapterCount}" class="block text-sm font-medium text-gray-700">Titre du Chapitre</label>
                            <button type="button" class="remove-chapter-btn text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="chapters[${chapterCount}][title]" id="chapter-title-${chapterCount}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div class="parts-container">
                            <div class="part-form bg-gray-50 p-4 rounded-md mb-4">
                                <div class="mb-3">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Titre de la Partie</label>
                                    <input type="text" name="chapters[${chapterCount}][parts][0][title]" class="part-title w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div class="mb-3">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Contenu de la Partie</label>
                                    <div class="ckeditor-container">
                                        <div class="editor" id="${newEditorId}"></div>
                                        <input type="hidden" name="chapters[${chapterCount}][parts][0][content]" class="editor-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="button" class="add-part-btn mt-2 px-4 py-2 bg-blue-100 text-blue-700 rounded-md hover:bg-blue-200 transition-colors flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            Ajouter une partie
                        </button>
                    `;
                    
                    chaptersContainer.appendChild(newChapterForm);
                    initCKEditor(newEditorId);
                    chapterCount++;
                    updateFieldNames();
                });
                
                // Supprimer un chapitre
                document.addEventListener('click', function(e) {
                    if (e.target.closest('.remove-chapter-btn')) {
                        const chapterForm = e.target.closest('.chapter-form');
                        const editorDivs = chapterForm.querySelectorAll('.editor');
                        
                        // Détruire toutes les instances CKEditor dans ce chapitre
                        const destroyPromises = [];
                        editorDivs.forEach(editorDiv => {
                            if (editorInstances[editorDiv.id]) {
                                destroyPromises.push(
                                    editorInstances[editorDiv.id].destroy()
                                        .then(() => {
                                            delete editorInstances[editorDiv.id];
                                        })
                                );
                            }
                        });
                        
                        Promise.all(destroyPromises)
                            .then(() => {
                                chapterForm.remove();
                                updateFieldNames();
                            })
                            .catch(error => {
                                console.error('Erreur lors de la destruction des éditeurs:', error);
                                chapterForm.remove();
                                updateFieldNames();
                            });
                    }
                });
                
                // Gérer la soumission du formulaire
                document.getElementById('course-form').addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Mettre à jour tous les champs cachés avec le contenu des éditeurs
                    Object.keys(editorInstances).forEach(editorId => {
                        const editor = editorInstances[editorId];
                        const container = document.getElementById(editorId).closest('.ckeditor-container');
                        const hiddenInput = container.querySelector('.editor-content');
                        hiddenInput.value = editor.getData();
                    });
                    
                    // Collecter les données du formulaire
                    const formData = new FormData(this);
                    const formDataObject = {};
                    
                    // Convertir FormData en objet structuré
                    for (const [key, value] of formData.entries()) {
                        // Utiliser une expression régulière pour extraire les indices et les noms de propriétés
                        const matches = key.match(/chapters\[(\d+)\]\[([^\]]+)\](?:\[(\d+)\]\[([^\]]+)\])?/);
                        
                        if (matches) {
                            const chapterIndex = matches[1];
                            const chapterProp = matches[2];
                            
                            // Initialiser la structure si nécessaire
                            if (!formDataObject.chapters) {
                                formDataObject.chapters = [];
                            }
                            
                            if (!formDataObject.chapters[chapterIndex]) {
                                formDataObject.chapters[chapterIndex] = {};
                            }
                            
                            if (chapterProp === 'parts') {
                                const partIndex = matches[3];
                                const partProp = matches[4];
                                
                                if (!formDataObject.chapters[chapterIndex].parts) {
                                    formDataObject.chapters[chapterIndex].parts = [];
                                }
                                
                                if (!formDataObject.chapters[chapterIndex].parts[partIndex]) {
                                    formDataObject.chapters[chapterIndex].parts[partIndex] = {};
                                }
                                
                                formDataObject.chapters[chapterIndex].parts[partIndex][partProp] = value;
                            } else {
                                formDataObject.chapters[chapterIndex][chapterProp] = value;
                            }
                        }
                    }
                    
                    // Nettoyer les tableaux (supprimer les trous)
                    formDataObject.chapters = formDataObject.chapters.filter(Boolean);
                    formDataObject.chapters.forEach(chapter => {
                        if (chapter.parts) {
                            chapter.parts = chapter.parts.filter(Boolean);
                        }
                    });
                    
                    // Afficher les données dans l'aperçu
                    document.getElementById('data-preview').textContent = JSON.stringify(formDataObject, null, 2);
                    
                    // Envoyer les données au serveur (décommentez pour activer)
                    /*
                    fetch('/api/submit-course', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(formDataObject),
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Succès:', data);
                        alert('Cours enregistré avec succès!');
                    })
                    .catch((error) => {
                        console.error('Erreur:', error);
                        alert('Erreur lors de l\'enregistrement du cours.');
                    });
                    */
                    
                    // Pour démonstration, afficher les données dans la console
                    console.log('Données à envoyer au backend:', formDataObject);
                });
            });
        </script>
    </body>
</html>