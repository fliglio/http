<?php

namespace Fliglio\Http;

interface RenderableResponseBody extends ResponseBody {
	public function render(); // void
}
