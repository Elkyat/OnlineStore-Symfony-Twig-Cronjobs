// public/js/main.js

window.expandGridElement = function(element) {
    const expansionClass = 'md:col-span-2';
    
    // 1. Verificar si ya está expandido
    const isExpanded = element.classList.contains(expansionClass);
    
    // 2. Limpiar todos los productos (Reset)
    document.querySelectorAll('.product-card').forEach(card => {
        card.classList.remove(expansionClass, 'shadow-2xl', 'ring-2', 'ring-green-500');
    });

    // 3. Si no estaba expandido, aplicamos los cambios
    if (!isExpanded) {
        element.classList.add(expansionClass, 'shadow-2xl', 'ring-2', 'ring-green-500');
        
        // Scroll suave para no perder de vista el producto expandido
        element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
};