MEDIAWIKI_LOAD_URL ?= http://localhost/w/load.php

kss: kssnodecheck
# Generates CSS of mediawiki.ui and mediawiki.ui.button using ResourceLoader, then applies it to the
# KSS style guide
	$(eval KSS_RL_TMP := $(shell mktemp /tmp/tmp.XXXXXXXXXX))
	@curl -sG "${MEDIAWIKI_LOAD_URL}?modules=mediawiki.ui.anchor|mediawiki.ui.checkbox|mediawiki.ui.input|mediawiki.legacy.shared|mediawiki.legacy.commonPrint|mediawiki.ui|mediawiki.ui.button&only=styles" > $(KSS_RL_TMP)
	@node_modules/.bin/kss-node ../../resources/src/mediawiki.ui static/ --css $(KSS_RL_TMP) -t styleguide-template
	@rm $(KSS_RL_TMP)

kssopen: kss
	@echo Opening the generated style guide...
	@command -v xdg-open >/dev/null 2>&1 || { open ${PWD}/static/index.html; exit 0; }
	@xdg-open ${PWD}/static/index.html

kssnodecheck:
	@scripts/kss-node-check.sh
