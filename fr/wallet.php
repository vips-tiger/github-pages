<!-- Wallet Section -->
<div id="wallet">
  <div class="container">
    <div class="section-title text-center center">
      <h2>WALLET</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="wallet-button">
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_win_normal.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-normal.png" alt="" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_normal.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-normal.png" alt="" width="161" height="51">
          </a><br>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_win_ms_vips.zip">
            <img src="<?php echo URL; ?>/img/wallet/win-ms-vips.png" alt="" width="161" height="51">
          </a>
          <a href="https://github.com/vips-web/github-pages/raw/master/download/VIPSTARCOIN_mac_ms_vips.zip">
            <img src="<?php echo URL; ?>/img/wallet/mac-ms-vips.png" alt="" width="161" height="51">
          </a><br><br>
          <a href="<?php echo URL; ?>/download/how_to_use_en.pdf" class="button button-bw" target="_blank">
            HOW TO USE&nbsp;&nbsp;<i class="fas fa-file-pdf"></i>
          </a><br>
          <a href="http://explorer.vipstarcoin.jp/" class="button button-bw" target="_blank">
            VIPSTARCOIN EXPLORER&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>
          </a>
        </div>
        <div class="wallet-swap">
          <p class="wallet-swap-title-b">Les anciens VIPS (Ethreum tokens) seront échangés pour la crypto monnaie originale.</p>
          <button type="button" class="button button-bw" data-toggle="modal" data-target="#walletModal">
            Nos promesses&nbsp;&nbsp;<i class="far fa-window-restore"></i>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="walletModalLabel">Règles d'échanges</h4>
                </div>
                <div class="modal-body">
                  <p class="modal-text">
                    <span>1. Est-ce que la différence d'approvisionnement entre l'ancien token et la nouvelle monnaie est considérée prise en compte dans les échanges ?</span><br>
                    <span><b>Nous allons échanger l'ancien token pour une nouvelle monnaie au taux de 1:1.2 .</b></span>
                  </p>
                  <p class="modal-text">
                    <span>2. Comment les décimaux seront partagés ?</span><br>
                    <span><b>La portion du décimal de l'ancien token sera arrondie sur l'échange de la nouvelle monnaie.</b></span>
                  </p>
                  <p class="modal-text">
                    <span>3. Pouvons-nous recevoir la récompense de POS pour la portion de la monnaie échangée ?</span><br>
                    <span><b>Oui, vous la recevrez.</b></span>
                  </p>
                  <p class="modal-text">
                    <span>4. J'ai seulement un Smartphone et pas d'ordinateur. Puis-je encore rejoindre le programme d'échange ?</span><br>
                    <span><b>
                      Nous recommandons d'utiliser un ordinateur avec Windows ou un ordinateur MAC pour rejoindre le programme d'échange.<br>
                      Nous allons préparer une procédure spéciale pour recevoir une nouvelle monnaie pour les utilisateurs de Smartphones après l'inscription sur des plateformes d'échange de crypto monnaie. Cependant, cette procédure aura une limite de temps et vos tokens seront échangés au taux de 1:1 au lieu de 1:1:2.
                    </b></span>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button-bw" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
