<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribución - Alvcom</title>
    <!-- Directiva de Vite para cargar Tailwind -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased h-screen flex overflow-hidden">

    <!-- SIDEBAR (Menú Lateral) -->
    <aside class="w-64 bg-brand-dark text-white flex flex-col shadow-xl z-20">
        <!-- Logo -->
        <div class="p-6">
            <h1 class="text-3xl font-bold text-brand-teal-light">Alvcom</h1>
            <p class="text-xs tracking-widest text-gray-400 mt-1">OUTSOURCING</p>
        </div>

        <!-- Menú -->
        <nav class="flex-1 px-4 space-y-6 overflow-y-auto">
            <div>
                <p class="text-sm font-bold text-white mb-2 px-2">Menú</p>
                <!-- Quité items para no alargar, pero sigue la misma lógica -->
            </div>

            <div>
                <p class="text-sm font-bold text-white mb-2 px-2">Inicio</p>
                <ul class="space-y-1 text-sm text-gray-300">
                    <li><a href="#" class="block px-2 py-2 hover:text-white">Bienvenida</a></li>
                    <li><a href="#" class="block px-2 py-2 hover:text-white">Capacitaciones</a></li>
                    <li><a href="#" class="block px-2 py-2 hover:text-white">Directorio</a></li>
                </ul>
            </div>

            <div>
                <p class="text-sm font-bold text-white mb-2 px-2">Carga de clientes</p>
                <ul class="space-y-1 text-sm text-gray-300">
                    <!-- Item Activo -->
                    <li>
                        <a href="#" class="block px-4 py-2 bg-white text-brand-dark font-semibold rounded-lg shadow">
                            Distribución
                        </a>
                    </li>
                    <li><a href="#" class="block px-2 py-2 hover:text-white mt-2">Banbif</a></li>
                    <li><a href="#" class="block px-2 py-2 hover:text-white">BCP</a></li>
                    <li><a href="#" class="block px-2 py-2 hover:text-white">IBK Empresas</a></li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <!-- HEADER SUPERIOR -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8 z-10 shrink-0">
            <div class="text-sm text-gray-500">
                Home > <span class="text-brand-dark font-medium">Distribución</span>
            </div>
            
            <div class="flex items-center gap-3">
                <div class="text-right">
                    <p class="text-sm font-bold text-brand-dark">SIN NOMBRE</p>
                    <p class="text-xs text-gray-500">Practicante de Sistemas</p>
                </div>
                <div class="h-10 w-10 rounded-full bg-brand-teal text-white flex items-center justify-center font-bold">
                    SN
                </div>
            </div>
        </header>

        <!-- CUERPO DE LA PÁGINA (Scrollable) -->
        <div class="flex-1 overflow-y-auto p-8">
            
            <!-- Título de la página -->
            <div class="mb-6">
                <h2 class="text-3xl font-bold text-brand-dark">Reparte tu cartera</h2>
                <p class="text-gray-500 mt-1">Cada cliente se asigna a un asesor y queda visible para su supervisor. Ajusta la carga de cada uno.</p>
            </div>

            <!-- Banner Azul -->
            <div class="bg-brand-dark rounded-xl p-6 flex flex-col md:flex-row justify-between items-center shadow-md mb-8">
                <div>
                    <p class="text-brand-teal-light text-xs font-bold tracking-wider mb-1">POR DISTRIBUIR • BANBIF</p>
                    <h3 class="text-white text-3xl font-bold">1,670 clientes</h3>
                    <p class="text-gray-300 text-sm mt-1">2 supervisores • 6 asesores seleccionados</p>
                </div>
                <div class="flex gap-3 mt-4 md:mt-0">
                    <button class="px-4 py-2 rounded-full border border-brand-teal text-brand-teal hover:bg-brand-teal hover:text-white transition text-sm font-medium">
                        Equitativa
                    </button>
                    <button class="px-4 py-2 rounded-full bg-white text-brand-dark hover:bg-gray-100 transition text-sm font-medium">
                        Por capacidad
                    </button>
                    <button class="px-4 py-2 rounded-full bg-brand-teal text-white shadow hover:bg-teal-500 transition text-sm font-medium">
                        Confirmar distribución
                    </button>
                </div>
            </div>

            <!-- SECCIÓN SUPERVISOR 1 -->
            <div class="mb-8">
                <!-- Encabezado del Supervisor -->
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-12 w-12 rounded-full bg-pink-100 text-pink-700 flex items-center justify-center font-bold text-lg">MQ</div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h4 class="text-brand-dark font-bold text-lg">Marisol Quispe León</h4>
                            <span class="bg-brand-dark text-white text-xs px-2 py-0.5 rounded-full">Supervisor</span>
                        </div>
                        <p class="text-sm text-gray-500">Coordinadora Banbif • 1370 clientes en su equipo</p>
                    </div>
                </div>

                <!-- Grilla de Asesores -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Tarjeta Asesor 1 -->
                    <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="h-10 w-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">RM</div>
                            <div>
                                <h5 class="text-brand-dark font-bold">Rosa Medina Paz</h5>
                                <p class="text-xs text-gray-500">Asesor • reporta a Marisol</p>
                            </div>
                        </div>
                        <div class="flex items-end justify-between mb-4">
                            <div class="flex items-baseline gap-1">
                                <span class="text-4xl font-bold text-brand-dark">520</span>
                                <span class="text-sm text-gray-500">/ 450 clientes</span>
                            </div>
                            <div class="flex gap-2">
                                <button class="h-8 w-8 rounded-md border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50">-</button>
                                <button class="h-8 w-8 rounded-md border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50">+</button>
                            </div>
                        </div>
                        <!-- Barra de progreso -->
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <!-- Si sobrepasa, puedes cambiar el color. Aquí uso el teal como base -->
                            <div class="bg-brand-teal h-2.5 rounded-full" style="width: 100%;"></div>
                        </div>
                    </div>
                    
                    <!-- Tarjeta Asesor 2 -->
                    <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="h-10 w-10 rounded-full bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-sm">LC</div>
                            <div>
                                <h5 class="text-brand-dark font-bold">Luis Cárdenas Vera</h5>
                                <p class="text-xs text-gray-500">Asesor • reporta a Marisol</p>
                            </div>
                        </div>
                        <div class="flex items-end justify-between mb-4">
                            <div class="flex items-baseline gap-1">
                                <span class="text-4xl font-bold text-brand-dark">480</span>
                                <span class="text-sm text-gray-500">/ 450 clientes</span>
                            </div>
                            <div class="flex gap-2">
                                <button class="h-8 w-8 rounded-md border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50">-</button>
                                <button class="h-8 w-8 rounded-md border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50">+</button>
                            </div>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-brand-teal h-2.5 rounded-full" style="width: 100%;"></div>
                        </div>
                    </div>

                    <!-- Tarjeta Asesor 3 -->
                    <div class="bg-white rounded-xl border border-gray-200 p-5 shadow-sm">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="h-10 w-10 rounded-full bg-red-100 text-red-700 flex items-center justify-center font-bold text-sm">KS</div>
                            <div>
                                <h5 class="text-brand-dark font-bold">Karen Soto Ríos</h5>
                                <p class="text-xs text-gray-500">Asesor • reporta a Marisol</p>
                            </div>
                        </div>
                        <div class="flex items-end justify-between mb-4">
                            <div class="flex items-baseline gap-1">
                                <span class="text-4xl font-bold text-brand-dark">370</span>
                                <span class="text-sm text-gray-500">/ 450 clientes</span>
                            </div>
                            <div class="flex gap-2">
                                <button class="h-8 w-8 rounded-md border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50">-</button>
                                <button class="h-8 w-8 rounded-md border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50">+</button>
                            </div>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-brand-teal h-2.5 rounded-full" style="width: 82%;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Ejecutar Vite para recarga en caliente durante el desarrollo -->
    @vite('resources/js/app.js')
</body>
</html>