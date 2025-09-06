<!-- Modal for Shopify -->
<div class="modal fade" id="popupAbo" tabindex="-1" aria-labelledby="popupAboLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="popupAboLabel">Choisissez votre abonnement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Modal content will be loaded here -->
                <div class="pricing-content">
                    <div class="form-group">
                        <label for="QntyInput">Nombre de connexions supplémentaires:</label>
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" type="button" id="moinsBtn">-</button>
                            <input type="number" class="form-control" id="QntyInput" value="0" min="0" max="2" readonly>
                            <button class="btn btn-outline-secondary" type="button" id="plusBtn">+</button>
                        </div>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="proxyToggle">
                        <label class="form-check-label" for="proxyToggle">
                            Ajouter Proxy (+12€)
                        </label>
                    </div>
                    
                    <div id="ligneMessage" style="display: none;">
                        <span id="connexionsText"></span>
                        <span id="connexionsPrix"></span>
                    </div>
                    
                    <div id="ligneProxy" style="display: none;">
                        <span>Proxy</span>
                        <span>12 €</span>
                    </div>
                    
                    <div class="total-price">
                        <strong>Total: <span id="totalPrix">39 €</span></strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="redirigerShopify()">Commander Maintenant</button>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
