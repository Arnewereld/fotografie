    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-white-10 py-12 mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-gray-400 text-sm">
                        © <?php echo date('Y'); ?> <?php echo e(PHOTOGRAPHER_NAME); ?>. Alle rechten voorbehouden.
                    </p>
                </div>
                <div class="flex space-x-6">
                    <a href="<?php echo get_page_url('info'); ?>" class="text-gray-400 hover:text-brand-accent transition-colors text-sm">
                        Over dit project
                    </a>
                    <a href="<?php echo get_page_url('toc'); ?>" class="text-gray-400 hover:text-brand-accent transition-colors text-sm">
                        Inhoud
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="public/js/main.js"></script>
</body>
</html>
